@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')

  <div class="container">
    <div class="row">
      @foreach (config("studenti") as $key => $studente)
        <div class="col-6">
          <div class="wrapStudente">
            <div class="wrapImgStudente">
              <img src="https://www.boolean.careers/images/students/biagini.png" alt="">
            </div>
            <div class="wrapContentStudente">
              <h3>{{ $studente["nome"] }}</h3>
              <p>Ora è {{ $studente["professione"] }}</p>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>

  @include('_partials._footer')

@endsection
