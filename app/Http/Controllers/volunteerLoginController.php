<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


// Login

use Auth;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class volunteerLoginController extends Controller
{
    //

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


      // Redirect for the organization login page
      public function login () {

        return view('auth.volunteer.login');

      }


      public function postLogin (Request $request) {


            // Validator for what the user enter
            $validator = validator($request->all(), [
                'email'    => 'required|min:6|max:100|',
                'password' => 'required|min:6|max:100',
            ]);


            // condition to return a message
            if ($validator->fails() ) {

              return redirect('/volunteer/login')
                            ->withErros($validator)
                            ->withInput();
            }

            // grab the data
            $credentials = [
              'email'    => $request->get('email'),
              'password' => $request->get('password')
            ];


            //if everything goes fine
            if ( auth()->guard('volunteer')->attempt($credentials) ) {

                return redirect('/home');

            }else
            {
                return redirect('/volunteer/login')
                        ->withErros('erros', 'Wrong login')
                        ->withInput();
            }

      }


      public function logout(){
        // dd($logout);
        auth()->guard('volunteer')->logout();
        return redirect('/volunteer/login');
      }


}
