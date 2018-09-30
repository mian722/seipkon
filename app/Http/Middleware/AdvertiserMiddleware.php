<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdvertiserMiddleware
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
        if (auth()->guest()) {
            return redirect('/login');
        }
        foreach (Auth::user()->role as $role) {
            if ($role->name == 'advertiser') {
                return $next($request);
            }

            return redirect('/home');
        }
    }
}
