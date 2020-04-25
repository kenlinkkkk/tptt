<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    const MOBIFONE_KEY = 'UJAaZzSs0hm6VCm9';
    const MOBIFONE_CONFIRM = 'http://dangky.mobifone.com.vn/wap/html/sp/confirm.jsp';
    const SPID = 255;
    public function index()
    {
        return view('home.home');
    }

    public function policy()
    {
        return view('home.policy');
    }

    public function registerPackage(Request $request)
    {
        Log::info('LOG::registerPackage::BEGIN');
        $data = $request->except('_token');

        $trans_id = date('ymdhis');
        $package_code = $data['pkg'];
        if ($package_code == 'Q') {
            $price = 5000;
        } else {
            $price = 0;
        }
        $free_circle = 1;
        $circle = 1;
        $custom_care = '19000105';
        $price_custom_care = '1000';
        $back_url = route('index');

        $data_raw = $trans_id .'&'. $package_code .'&'. $free_circle .'&'. $price .'&'. $circle .'&'. $custom_care .'&'. $price_custom_care .'&'. $back_url;
        Log::info('LOG::registerPackage::data-data_raw:'. $data_raw);

        $url_raw = self::MOBIFONE_CONFIRM .'?sp_id=' . self::SPID .'&link=' . $data_raw;
        Log::info('LOG::registerPackage::data-url_raw:'. $url_raw);

        $url_encrypt = self::MOBIFONE_CONFIRM .'?sp_id=' .self::SPID .'&link='. aes128Encrypt(self::MOBIFONE_KEY, $data_raw);
        Log::info('LOG::registerPackage::data-url_encrypt:'. $url_encrypt);
        Log::info('LOG::registerPackage::END');

        return Redirect::away($url_encrypt);
    }

    public function redirectUrl(Request $request)
    {
        Log::info('LOG::redirectUrl::MSISDN');
        $content = $request->get('link');

        if (empty($content)) {
            session()->put('_user', ['msisdn' => 'empty']);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
            return Redirect::route('index');
        } else {
            session()->put('_user', ['msisdn' => aes128Decrypt('km12tXwuXaJ8Hagh', $content)]);
            Log::info('LOG::redirectUrl::session-msisdn: '. session()->get('_user')['msisdn']);
            return Redirect::route('index');
        }
    }
}
