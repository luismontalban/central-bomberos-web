<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class PrimerMiddleware
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
        
        if(Auth::check() && Auth()->user()->rol=='Comandante' || Auth()->user()->rol=='Cuartelero' ){
          return $next($request);  
          
        }else{
          return back();  
        }
        
        
    }
}
