<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class chekcAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $age)
    {
        $l_age = 1;
        if($l_age == $age){
            dd('success');
        }else{
            dd('no-success');
        }
        return $next($request);
    }
}
