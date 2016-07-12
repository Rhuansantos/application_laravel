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


    //  public function __construct(Guard $auth)
    //   {
    //       $this->auth = $auth;
    //   }


    public function handle($request, Closure $next, $guard = null)
    {


        // if (Auth::guard($guard)->guest()) {
        //   if(auth()->guard('organization')->guest()){
        //
        //     if ($request->ajax() || $request->wantsJson()) {
        //
        //         return response('Unauthorized.', 401);
        //     }
        //     else {
        //
        //         return redirect()->guest('organization/login');
        //     }
        // }

        // return $next($request);


        //
        // if ($request->ajax() || $request->wantsJson()) {
        //
        //     return response('Unauthorized.', 401);
        // }
        //
        // // if the user is a guest redirect to the login screen
        // if (auth()->guard($guard)->guest()) {
        //   echo "voce é um visitante";
        //   return redirect()->guest('organization/login');
        // }
        //
        // // if the user have this guard stay if not give a unauthorized message
        // if (auth()->guard('volunteer')->check() ||  auth()->guard('organization')->check()) {
        //     echo "fique aqui auth";
        // }
        //
        // else{
        //       return response('Unauthorized.', 401);
        // }

          return $next($request);
      }



}
