<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware(['organization']);
    }

    public function index()
    {
        return view('home');
    }
}
