<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //ログイン中の場合、マイページ画面へ
        $guard = 'web';
        if (Auth::guard($guard)->check()) {
               return redirect('/message/resultlogin');
        }
        return $next($request);
    }
}
