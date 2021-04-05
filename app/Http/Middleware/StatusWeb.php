<?php

namespace App\Http\Middleware;

use App\Models\Config;
use Closure;

class StatusWeb
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
        $config = Config::first();
        if ($config->status == 0) {
            if ($request->getPathInfo() != '/') {
                return redirect()->route('mantenimiento');
            }
        }
        
        return $next($request);
    }
}
