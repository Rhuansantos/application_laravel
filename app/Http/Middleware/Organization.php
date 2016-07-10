<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class organization
{



  public function handle($request, Closure $next, $guard = null)
  {


    //
    // if(auth()->guard('organization')){
    //     return redirect('/pets');
    // }

        if (Auth::guard($guard)->guest()) {

            if ($request->ajax() || $request->wantsJson()) {

                return response('Unauthorized.', 401);
            }
            else {

              // return redirect('organization/login');

            }
        }







        return $next($request);


  }



}
