<?php

namespace App\Http\Middleware;

use App\Models\Config as ModelsConfig;
use Illuminate\Support\Facades\View;
use Closure;


class Config
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
        View::share('config', $config);
        return $next($request);
    }
}
