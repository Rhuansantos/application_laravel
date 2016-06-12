<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use DB;
use App\Pet;

class PetController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
    public function index()
    {
        // $pets = DB::table('pets')->get();
        $pets = Pet::paginate(3);
        return view ('pets.index', compact('pets'));
        //return view ('pets.index')->with('pets', $pets);
    }


    public function create()
    {
        return view ('pets.create');
    }


    public function store(Request $request)
    {
        $data = $request->only(
          'description',
          'age',
          'pet_type',
          'size',
          'name'
      );
        $pets = Pet::create($data);
        return \Redirect::route('pets.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pets = Pet::find($id);

        return view('pets.edit', compact('pet'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->only(
          'description',
          'age',
          'pet_type',
          'size',
          'name'
        );
        $pets = Pet::find($id);
        $pets->update($data);
        return \Redirect::to('pets');
    }

    public function destroy($id)
    {
      Pet::destroy($id);
      return \Redirect::to('/pets');

    }
}
