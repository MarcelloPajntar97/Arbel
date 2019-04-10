<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="navbar">
  <div class="container" id="navbarContainer">
    <a class="navbar-brand" href="{{ url('/home') }}">
    <img class = "arbelLogo" src="{{ asset('/img/darkLogo.svg')}}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->


    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Dashboard <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Aggiungi docente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/editUser') }}">Gestisci docente</a>
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

      <a class="nav-link logoutButton" href="{{ route('login') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>



       <!-- <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('login') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li> -->
     @endguest
  </ul>
</div>
</div>
</nav>
