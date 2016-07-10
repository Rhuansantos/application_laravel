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




Route::group(['middleware' => 'web'], function(){

  // Route::Auth();
  Route::get('/organization/login', 'OrganizationLoginController@login');


});


// Organization Route
  Route::group(['middleware' => 'organization'], function(){


      Route::resource('organizationAuth', 'OrganizationController');

      // Main page/ dashboard
      Route::get('/home', 'HomeController@index');

      //Organization login
      Route::get('/organization/logout', 'OrganizationLoginController@logout');

      Route::post('/organization/login', 'OrganizationLoginController@postLogin');


      /// Pets CRUD and Get
      Route::resource('pets', 'PetController');
      Route::get('/pets/create', 'PetController@SelectPet');


  });
