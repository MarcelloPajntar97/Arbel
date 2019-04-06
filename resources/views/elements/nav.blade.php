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

      <!-- <ul class="navbar-nav mr-auto navVoice">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/calendar') }}">Calendario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contatta</a>
        </li>
      </ul> -->

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

       <li class="nav-item dropdown dropdownProfile">
         <!-- <img class = "imageProfile" src="{{ asset('/img/profile.png')}}"> -->
        <a class="nav-link dropdown-toggle profileButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="photo">
            <img class = "imageProfile" src="{{ asset('/img/profile.png')}}">
          </div>
          <!-- {{ Auth::user()->name }}<b class="caret d-none d-lg-block d-xl-block"></b> -->
        </a>

        <ul class="dropdown-menu dropdown-navbar">
            <li class = "nav-link text-right">{{ Auth::user()->name }} {{ Auth::user()->surname }}</li>
            <li class="dropdown-divider"></li>
            <li class = "nav-link profileVoice"><a class= "nav-item dropdown-item" href="#">{{ __('Cambia Password') }}</a>
            </li>
            <li class = "nav-link profileVoice"><a class= "nav-item dropdown-item" href="#">{{ __('Informazioni Arbel') }}
            </a></li>
            <li class = "nav-link profileVoice"><a class= "nav-item dropdown-item" href="{{ route('login') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
          </ul>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

        <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item profileVoice " href="{{ route('login') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div> -->
    </li>
     @endguest
  </ul>
</div>
</div>
</nav>
