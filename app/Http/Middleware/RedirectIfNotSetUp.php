<?php

namespace App\Http\Middleware;

use App\Setting;
use Closure;

class RedirectIfNotSetUp
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
        if (! Setting::first()) {
            return redirect('/setup');
        }

        return $next($request);
    }
}
