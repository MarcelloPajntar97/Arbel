<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="navbar">
  <div class="container" id="navbarContainer">
    <a class="navbar-brand" href="{{ url('/home') }}">
      <img class="arbelLogo" src="{{ asset('/img/newLogo.png')}}">
    </a>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
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
          <a class="nav-link dropdown-toggle profileButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="photo">
              <?php
              $imageDefualt=App\User::where('avatar')->get();
              if ($imageDefualt) { ?>
                <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" />
                <?php }
              else { ?>
                <img src="{{asset('/img/userDefault.jpg')}}" class="nextSection">
                <?php
              }?>
            </div>
          </a>

          <ul class="dropdown-menu dropdown-navbar">
            <li class="text-right userName">{{ Auth::user()->name }} {{ Auth::user()->surname }}</li>
            <li class="dropdown-divider"></li>
            <li class="nav-link profileVoice"><a class="nav-item dropdown-item" href="{{ url('/profile') }}">{{ __('Modifica Profilo') }}
            </a></li>
            <li class="nav-link profileVoice"><a class="nav-item dropdown-item" href="{{ route('login') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
          </ul>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          @csrf
        </li>
      @endguest
    </ul>
  </div>
</nav>
