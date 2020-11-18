<?php

namespace App\Http\Middleware;

use Closure;

class alMiddleware
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
        if ((auth()->check() && auth()->user()->type === 'al' )||
        (auth()->check() && auth()->user()->type === 'admin'))
            return $next($request);

        return redirect('/error');
}
}
