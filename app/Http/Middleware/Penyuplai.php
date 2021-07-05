<?php

namespace App\Http\Middleware;

use Closure;

class Penyuplai
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
        if(auth()->user()->nama_role == "penyuplai" || auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"You don't have admin access.");
    }
}
