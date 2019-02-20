@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')

  <div class="container">
    <div class="row">
      <ul>
        @foreach ($risultato  as $key => $studente)
          <li>{{$key}} : {{$studente}}</li>
        @endforeach
      </ul>
    </div>
  </div>

  @include('_partials._footer')

@endsection
