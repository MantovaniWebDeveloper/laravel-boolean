<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagineInterne extends Controller
{
  public function corso(){
    $nominativo = "Sono la pagina corso";

    return view("corso", compact('nominativo'));
  }

  public function studenti(){
    $nominativo = "Sono la pagina studenti";

    return view("studenti", compact('nominativo'));
  }

  public function metodo(){
    $nominativo = "Sono la pagina metodo";

    return view("metodo", compact('nominativo'));
  }

  public function dopoIlCorso(){
    $nominativo = "Sono la pagina dopoIlCorso";

    return view("dopoIlCorso", compact('nominativo'));
  }

  public function faq(){
    $nominativo = "Sono la pagina faq";

    return view("faq", compact('nominativo'));
  }

}
