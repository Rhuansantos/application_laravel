<?php

namespace App\Http\Middleware;

use Closure;

class Organization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    //  public function __construct(Guard $organization)
    //   {
    //       $this->organization = $organization;
    //   }


    public function handle($request, Closure $next)
    {
      if (Auth::guard($guard)->guest()) {
          if ($request->ajax() || $request->wantsJson()) {
              return response('Unauthorized.', 401);
          } else {
              return redirect()->guest('organization/login');
          }
      }

      return $next($request);
  }

}
