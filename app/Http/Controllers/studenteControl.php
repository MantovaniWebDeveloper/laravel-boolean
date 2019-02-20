<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studenteControl extends Controller
{
    public function studenteSingolo($slug){

      $risultato  = [];

      foreach (config("studenti") as $key => $studente) {

        if($slug == $studente["slug"]){
          $risultato = $studente;
        }
      }
      return view("show", compact('risultato'));
    }

}
