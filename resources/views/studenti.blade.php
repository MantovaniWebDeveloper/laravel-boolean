@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')

  <div class="container">
    <div class="row">
      @foreach ($studenti  as $key => $studente)
        <div class="col-6">
          <div class="wrapStudente">
            <div class="wrapImgStudente">
              <img src="{{ $studente["img"] }}" alt="">
            </div>
            <div class="wrapContentStudente">
              <h3>{{ $studente["nome"] }} {{ $studente["cognome"] }} ({{ $studente["eta"] }}anni)</h3>
              <p>Ora è {{ $studente["professione"] }}</p>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>

  @include('_partials._footer')

@endsection
