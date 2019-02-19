@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')
  <div class="container-fluid">
    <p>{{ $nominativo }}</p>
  </div>
@endsection
