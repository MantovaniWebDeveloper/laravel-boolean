@extends('layouts.app')

@section('segnapostoContent')

  @include('_partials._header')

  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="wrapStudente">
          <div class="wrapImgStudente">
            <img src="https://www.boolean.careers/images/students/biagini.png" alt="">
          </div>
          <div class="wrapContentStudente">
            <h3>Alessandro Biagini</h3>
            <p>Ora è Web Developer in Softec spa</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('_partials._footer')

@endsection
