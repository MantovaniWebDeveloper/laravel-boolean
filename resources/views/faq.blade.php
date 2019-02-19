<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>index</title>
  </head>
  <body>
    @include('_partials._header')
    <div class="container-fluid">
      <p>{{ $nominativo }}</p>
    </div>
  </body>
</html>
