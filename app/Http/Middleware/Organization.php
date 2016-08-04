<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;


class organization
{


   public function handle($request, Closure $next, $guard = null)
   {









     if (Auth::guard('organization')->user()) {
         // if the user have this guard stay if not give a unauthorized message
         if (auth()->guard('organization')->check()) {

             echo "Eu sou um Organizador|||||";
         }

         else{
               return response('Unauthorized voce é só voluntario.', 401);
         }


       }





        return $next($request);
   }

}
