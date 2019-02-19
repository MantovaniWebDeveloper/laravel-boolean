<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
      $nominativo = "dario";
      

      return view("index", compact('nominativo'));
    }
}
