<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->

<nav class="navbar navbar-expand-md navbar-default navbar-laravel" id="navbar">
  <div class="container" id="navbarContainer">
    <a class="navbar-brand" href="{{ url('/home') }}">
    <img class = "arbelLogo" src="{{ asset('/img/darkLogo.svg')}}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'activeLink' : '' }}" href="{{ url('/home') }}">Dashboard <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('register') ? 'activeLink' : '' }}" href="{{ url('/register') }}">Aggiungi docente</a>
          </li>
        </ul>
      </div>

      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}"></a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"></a>
      </li>
      @endif
      @else

      <a class="logoutButton" href="{{ route('login') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>

     @endguest
</div>
</div>
</nav>
<!-- <script type="text/javascript">
  $('.navbar-nav .nav-link').click(function(){
      $('.navbar-nav .nav-link').removeClass('active');
      $(this).addClass('active');
  })
</script> -->
