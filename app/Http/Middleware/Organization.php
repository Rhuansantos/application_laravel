<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;


class organization
{


   public function handle($request, Closure $next, $guard = null)
   {



      // if the user is a guest
       if(auth()->guard('organization')->guest()){

         if ($request->ajax() || $request->wantsJson()) {

             return response('Unauthorized.', 401);
         }
         else {

             return redirect()->guest('organization/login');
         }
     }



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
