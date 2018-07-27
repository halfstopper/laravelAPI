<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\SUpport\Facades\Auth;

class BasicAuth
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
        //return $next($request);
        return Auth::onceBasic() ?: $next($request);
    }
}
