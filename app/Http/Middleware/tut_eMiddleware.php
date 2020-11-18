<?php

namespace App\Http\Middleware;

use Closure;

class tut_eMiddleware
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
        if ((auth()->check() && auth()->user()->type === 'tut_e' )||
        (auth()->check() && auth()->user()->type === 'admin'))
            return $next($request);

        return redirect('/menuTutorEn');
}
}
