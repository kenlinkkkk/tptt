<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CheckSub
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $link = 'http://free.mobifone.vn/isdn?sp=5899&link='. aes128Encrypt('km12tXwuXaJ8Hagh', route('backHome'));
        $user = session()->get('_user');

        if (empty($user['msisdn'])) {
            $headers = $request->header();

            if (empty($headers['msisdn'])) {

                if (!empty($_SERVER['HTTP_MSISDN'])) {
                    Log::info('LOG::Middleware::HTTP_MSISDN::' . $_SERVER['HTTP_MSISDN']);
                    session()->put('_user', ['msisdn' => $_SERVER['HTTP_MSISDN']]);
                } else {
                    return Redirect::away($link);
                }
            } else {
                $msisdn = $headers['msisdn'][0];
                Log::info('LOG::Middleware::request_header::' . $msisdn);
                session()->put('_user', ['msisdn' => $msisdn]);
            }
        } else {
            return $next($request);
        }
//        return $next($request);
    }
}
