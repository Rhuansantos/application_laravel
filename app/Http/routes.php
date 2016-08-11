<?php

//Route::singularResourceParameters();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



  Route::get('/', function () {
      return view('welcome');
  });

// Allow the user to register, login and reset the passowrd
  // Route::auth();

Route::group(['middleware' => ['web']], function(){

  Route::Auth();

  Route::get('/organization/login', 'OrganizationLoginController@login');
  Route::post('/organization/login', 'OrganizationLoginController@postLogin');

  // Route::get('/volunteer/login', 'OrganizationLoginController@login');
  // Route::post('/volunteer/login', 'OrganizationLoginController@login');

  Route::get('/volunteer/logout', 'OrganizationLoginController@logoutVolunteer');


    // Route::get('/organizationAuth', [
    //   'middleware' => 'volunteer',
    //   'uses' => 'OrganizationController@index'
    // ]);


});



// Organization Route
  Route::group(['Middleware' => 'organization'], function(){

      // Pets CRUD and Get
      Route::resource('pets', 'PetController');

      // Main page/ dashboard
      Route::get('/home', 'HomeController@index');

      //Organization login
      Route::get('/organization/logout', 'OrganizationLoginController@logout');

      // Inside off Organization Atuh
      Route::resource('organizationAuth', 'OrganizationController');
      //pets Route
      // Route::resource('pets', 'PetController');
      Route::get('/pets/create', 'PetController@SelectPet');

  });




/// =====================================  Production routes =====================================


  // Check If the user is log or not
  Route::get('/profile', function() {
          if(auth()->guard('organization')->check()){
               print_r(auth()->guard('organization')->user()->toArray());
          }

          if(auth()->guard('volunteer')->check()){
              print_r(auth()->guard('volunteer')->user()->toArray());
          }

          dd(auth()->guard('organization'));
      });
