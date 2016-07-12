<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class volunteer
{

    public function handle($request, Closure $next, $guard = null)
    {

      // if the user is a guest redirect to the login screen
      if (auth()->guard($guard)->guest()) {
        echo "visitante|||";
        // return redirect()->guest('organization/login');
      }

      // if the user have this guard stay if not give a unauthorized message
      if (auth()->guard('volunteer')->check() || auth()->guard('organization')->Check()) {

          echo "voluntario";
      }
      else{
            return response('Unauthorized.', 401);
      }

        return $next($request);
    }
}
