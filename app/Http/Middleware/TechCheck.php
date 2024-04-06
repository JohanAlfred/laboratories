<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TechCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('TechId'))
        {
            return redirect('tech')->with('fail', 'Login in as Technician To access page');
            view()->share('loginId', session('loginId'));
        }
        return $next($request);
    }
}
