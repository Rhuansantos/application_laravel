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




Route::group(['middleware' => 'organization'], function(){



      Route::get('/home', 'HomeController@index');

      Route::resource('pets', 'PetController');
      Route::get('/pets/create', 'PetController@SelectPet');


      Route::resource('organization', 'OrganizationController');


      Route::get('/organization/login', 'OrganizationController@login');
      Route::post('/organization/login', 'OrganizationController@postLogin');




});

// Route::auth();
