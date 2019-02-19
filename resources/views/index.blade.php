@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')
  <div class="retGreen">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-5 wrapTextPromo">
        <div class="content">
          <h2>Diventa sviluppatore web</h2>
          <p>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore</p>
          <input class="btnScopri" type="submit" name="" value="SCOPRI IL CORSO">
        </div>
      </div>
      <div class="col-7 wrapImgPromo">
        <div class="content">
          <img class="img-fluid" src="{{ asset('img/mac2x.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection
