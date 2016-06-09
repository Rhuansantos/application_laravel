<?php

namespace App\Http\Controllers;

// using database
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class PetController extends Controller
{

  // possivel apenas depois do login
  public function __construct()
  {
      $this->middleware('auth');
  }


    public function index()
    {
      $pets = DB::table('pet_models')->get();
      return view('pets/index')->with('pets', $pets);
      //return view ('pets/index');

    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }



    public function show($id)
    {


    }




    public function edit($id)
    {
        //
    }




    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request, $id)
    {
          // $pets = DB::table('pet_models')->get();
          $pets = PetController::find($id);
          $pets->delete();

          //Session::flash('success', 'The post was successfully deleted.');

          // $pets = DB::table('pet_models');
          // $pets = DB::table('pet_models');
          //
          // pets::find($id)->delete();
          //
          // Session::flash('success', 'The post was successfully deleted.');
          // return redirect()->route('home.index');
    }
}
