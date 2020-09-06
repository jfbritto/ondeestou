<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateSis
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
        if( session('id') == null ){
            return redirect('login');
        }
        
        return $next($request);
    }
}
