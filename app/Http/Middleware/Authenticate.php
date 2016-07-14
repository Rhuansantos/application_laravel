<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */


    //  protected $auth;

     public function __construct(Guard $auth)
      {
          $this->auth = $auth;
      }




    public function handle($request, Closure $next, $guard = null)
    {

        echo "organization:";
        echo "<br>";
        var_dump(auth::guard('organization')->guest());
        echo "<br>";
        echo "volunteer:";
        echo "<br>";
        var_dump(auth::guard('volunteer')->guest());


      // if both user are false
      if(auth::guard('organization')->guest() && auth::guard('volunteer')->guest()){


              if ($request->ajax() || $request->wantsJson()) {

                  return response('Unauthorized.', 401);
              }
              else {

                  return redirect()->guest('organization/login');
              }
        }


          return $next($request);
      }

}
