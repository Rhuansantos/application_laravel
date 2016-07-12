<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;


class organization
{


   public function handle($request, Closure $next, $guard = null)
   {

     // if the user is a guest redirect to the login screen
     if (auth()->guard($guard)->guest()) {
       echo "visitante - by organizador";
      //  return redirect()->guest('organization/login');
     }

     // if the user have this guard stay if not give a unauthorized message
     if (auth()->guard('organization')->check() || auth()->guard('volunteer')->check()) {

         echo "organizador";
     }

     else{
           return response('Unauthorized.', 401);
     }

       return $next($request);
   }

}
