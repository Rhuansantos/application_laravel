<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class volunteer
{

    public function handle($request, Closure $next, $guard = null)
    {

  //
     if (Auth::guard('volunteer')->user()) {

          // if the user have this guard stay if not give a unauthorized message
            if (auth()->guard('volunteer')->check()) {

                // echo "Eu sou um voluntario!!!";

                  return response('Unauthorized.', 401);


            }
            else{
                  return response('Unauthorized.', 401);
            }
        }
          return $next($request);
  }

}
