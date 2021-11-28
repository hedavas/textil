<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
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

        //$roles = array_slice( func_get_arg(), 2 );


            if (auth()->user()->roll_id === 1) 
            {
             return $next($request);
            }
        


        

        return redirect('/home');
    }
}
