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
                return Redirect::away($link);
            } else {
                $msisdn = $headers['msisdn'][0];
                session()->put('_user', ['msisdn' => $msisdn]);
            }
        } else {
            return $next($request);
        }
//        return $next($request);
    }
}
