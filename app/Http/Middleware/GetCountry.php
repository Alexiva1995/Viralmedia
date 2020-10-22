<?php

namespace App\Http\Middleware;

use App\Models\Country;
use Closure;
use Illuminate\Support\Facades\View;



class GetCountry
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
        $countries = Country::all();
        View::share('countries', $countries);
        return $next($request);
    }
}
