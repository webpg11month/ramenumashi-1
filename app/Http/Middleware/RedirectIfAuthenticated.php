<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);

        // \Log::debug('login判定:'.Auth::guard($guard)->check());

        // //未ログインの場合は、ログイン画面へ
        // if (!Auth::guard($guard)->check()) {
        //     return redirect('/login');
        // }

        // return $next($request);
    }
}
