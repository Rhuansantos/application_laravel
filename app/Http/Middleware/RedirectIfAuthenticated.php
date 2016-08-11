<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{


public function _construct(Guard $auth){

    $this->auth = $auth;
}

  //  redirect if the user is alredy authenticated

    public function handle($request, Closure $next)
    {
        // if (Auth::guard($guard)->check()) {
        //
        // if($this->auth->check()) {
        //     return redirect('/home');
        // }

        if(Auth::guard('organization')->check()){


          echo "voce já está logado";
            // return redirect('/home');
        }

        return $next($request);


    }


}
