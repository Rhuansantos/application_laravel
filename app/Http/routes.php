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

// $pets = DB::table('pet_models')->get();
// // $pets = Pet::all();
// print_r($pets);



Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware' => 'web'], function(){

  Route::auth();


Route::get('/home', 'HomeController@index');


});
