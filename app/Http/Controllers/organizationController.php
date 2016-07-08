<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// use App\Http\Requests;
// use App\organization;
// use Validator;

use Auth;

class OrganizationController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('organization', ['except' => 'login', 'postLogin']);

    }


    public function index()
    {
        return view ('organization.index');
    }


    public function create()
    {
        return view ('organization.create');
    }

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
                              ->withErros(['erros' => 'Wrong login'])
                              ->withInput();
          }



    }


    public function logout(){
      // dd($logout);
      auth()->guard('organization')->logout();
      return redirect('/organization/login');
    }



}
