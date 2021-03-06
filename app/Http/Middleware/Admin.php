<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
class Admin
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
        if ($request->user() && $request->user()->type !='admin')
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
