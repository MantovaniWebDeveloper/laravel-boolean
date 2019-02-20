<header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 wrapLogo">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="col-9 wrapMenu">
          <ul>
            <li class="elemento"><a href="{{ route('home') }}">HOME</a></li>
            <li class="elemento"><a href="{{ route('studenti-boolean') }}">STUDENTI</a></li>
            <li class="elemento"><a href="{{ route('corso-boolean') }}">CORSO</a></li>
            <li class="elemento"><a href="{{ route('metodo-boolean') }}">METODO</a></li>
            <li class="elemento"><a href="{{ route('dopo-il-corso') }}">DOPO IL CORSO</a></li>
            <li class="elemento"><a href="{{ route('faq-boolean') }}">FAQ</a></li>
            <li class="elemento"><a href="#"><button class="btn btn-lg btnIscriviti">iscriviti</button></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
