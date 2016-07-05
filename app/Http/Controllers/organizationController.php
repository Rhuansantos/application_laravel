<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\organization;

class OrganizationController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {

        return view ('organization.index');
    }


    public function create()
    {
        return view ('organization.create');
    }



    public function store(Request $request)
    {
        $data = $request->only(
          'organization',
          'state',
          'active',
          'email',
          'password'
      );
        $org = organization::create($data);
        return \Redirect::route('organization.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pet = Pet::find($id);

        return view('pets.edit', compact('pet'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->only(
        'organization',
        'state',
        'active',
        'email',
        'password'
        );
        $org = organization::find($id);
        $org->update($data);
        return \Redirect::to('/organization');
    }

    public function destroy($id)
    {
      organization::destroy($id);
      return \Redirect::to('/organization');

    }



}
