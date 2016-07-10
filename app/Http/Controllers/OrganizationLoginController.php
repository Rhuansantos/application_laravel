<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Login

use Auth;
use Validator;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class OrganizationLoginController extends Controller
{


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
          if ( auth()->guard('organization')->attempt($credentials) ) {

              return redirect('/home');

          }else
          {
              return redirect('/organization/login')
                      ->withErros('erros', 'Wrong login')
                      ->withInput();
          }

    }


    public function logout(){
      // dd($logout);
      auth()->guard('organization')->logout();
      return redirect('/organization/login');
    }



}
