<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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



}