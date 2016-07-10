<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrganizationController extends Controller
{

  public function __construct(){

    $this->middleware('auth:organization');

}

    public function index()
    {

        return view ('organization.index');

    }


    public function create()
    {
        //
        return view ('organization.create');

    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
