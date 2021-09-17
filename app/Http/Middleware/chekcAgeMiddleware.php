<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Todo;

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
            echo "success";
        }else{
            echo "no-succes";
        }
        return $next($request);
    }

    public function terminate($request, $response)
    {
        //when route added the middleware. we know that middleware is first check then function check then terminate function check
        //you can  every think apply this terminate this function, [example:automatica page create and another any option useing this terminate function ]
        dd(Todo::all());
    }
}
