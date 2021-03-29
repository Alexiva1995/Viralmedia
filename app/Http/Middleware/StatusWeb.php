<?php

namespace App\Http\Middleware;

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
        $config = ModelsConfig::first();
        if ($config->status == 1) {
            
        }else{

        }
        return $next($request);
    }
}
