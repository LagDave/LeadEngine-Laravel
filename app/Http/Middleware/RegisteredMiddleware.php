<?php

namespace App\Http\Middleware;

use Closure;

class RegisteredMiddleware
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
        if(!$request->session()->has('is_registered')){
            return redirect(route('signup.index'));
        }
        return $next($request);
    }
}
