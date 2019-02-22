<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        if (Auth::user() && Auth::user()->tipoEntidade !== 'admin'){
            return redirect('/home');
        }
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }
        return $next($request);
    }
}
