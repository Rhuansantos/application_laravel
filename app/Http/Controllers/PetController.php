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


  /**
   *
   *
   * @return \Illuminate\Http\Response
   */


    public function index()
    {
      $pets = DB::table('pet_models')->get();
      return view('pets/index')->with('pets', $pets);
      //return view ('pets/index');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}
