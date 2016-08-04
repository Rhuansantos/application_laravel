<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Login

use Auth;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class OrganizationLoginController extends Controller
{

  use AuthenticatesAndRegistersUsers, ThrottlesLogins;

   protected $redirectTo = '/organizationAuth';


    // Redirect for the organization login page
    public function login () {

      return view('auth.organization.login');

    }


    public function postLogin (Request $request) {


          // Validator for what the user enter
          $validator = validator($request->all(), [
              'email'    => 'required|min:6|max:100|',
              'password' => 'required|min:6|max:100',
          ]);


          // condition to return a message
          if ($validator->fails() ) {

            return redirect('/organization/login')
                          ->withErros($validator)
                          ->withInput();
          }

          // grab the data
          $credentials = [
            'email'    => $request->get('email'),
            'password' => $request->get('password')
          ];


          //if everything goes fine
          if ( auth()->guard('organization')->attempt($credentials)
                ||auth()->guard('volunteer')->attempt($credentials) ) {

                  // Check who the user are and redirect base on that.
                  if(auth::guard('organization')->check()){

                      return redirect('/organizationAuth');

                  }if(auth::guard('volunteer')->check()){

                      return redirect('/pets');
                  }

          // if the login fails
          }else
          {
              return redirect('/organization/login')
                      ->withErros('erros', 'Wrong login')
                      ->withInput();
          }

    }


      public function logout(){
        // dd($logout);

          // Check the user and make a logout
          if(auth::guard('organization')) {
              auth()->guard('organization')->logout();
          }
          if(auth::guard('volunteer')){

              auth()->guard('volunteer')->logout();
          }

        // return to the login screen
        return redirect('/organization/login');

      }

}
