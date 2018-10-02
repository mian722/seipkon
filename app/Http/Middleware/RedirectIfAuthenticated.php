<?php

namespace App\Http\Middleware;

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
            //return redirect('/admin/home');

            foreach (Auth::guard($guard)->user()->role as $role) {
                //return $role->name;
                if ($role->name == 'boss') {
                    return redirect('boss/home');
                }elseif ($role->name == 'admin') {
                    return redirect('admin');
                }elseif ($role->name == 'affiliate') {
                    return redirect('/affiliate');
                }elseif ($role->name == 'advertiser') {
                    return redirect('/advertiser');
                }
            }
        }


        return $next($request);
    }
}
