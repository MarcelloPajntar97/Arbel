@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <img class="lineLogin" src="{{asset('/img/lineLogin.svg')}}" alt="Responsive image" id="footer">
    </div>
  </div>

  <div class="row allElelement">
    <div class="col-md-6">
      <img class="myPhone" src="{{asset('/img/phone3.png')}}">
    </div>

    <div class="col-md-6">
      <div class="containerForm">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h2 class="loginText">{{ __('Benvenuto,') }}</h2><br>
          <div class="arbelText">{{ __('per proseguire inserisci i tuoi dati') }}</div>

          <div class="form-group row">
            <label for="email" class="col-md-6 col-form-label"></label>
            <div class="col-md-6 offset-md-4">
              <input id="email" placeholder="E-mail" type="email" class="customForm mailForm form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif

            </div>
          </div>

          <div class="form-group row ">
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-6">
              <input id="password" placeholder="Password" type="password" class="customForm passwordForm form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif

            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6 offset-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  {{ __('Ricordami') }}
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-8 offset-md-4">
              <button  type="submit" class="btn loginButton" id="login">
                {{ __('ACCEDI') }}
              </button>

              <div class="col-md-8 offset-md-4 ">
                @if (Route::has('password.request'))
                  <a class="btn btn-link text-dark passwordHelp" href="{{ route('password.request') }}">
                    {{ __('Hai dimenticato la Password?') }}
                  </a>
                @endif
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row downloadBadge">
    <div class="col-md-3">
      <a href="{{ url('https://www.google.it/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjw5LbQwrPhAhXNb1AKHSNqA4UQjRx6BAgBEAU&url=http%3A%2F%2Fwww.pictame.com%2Fuser%2Fman_back_%2F1480975863%2F1837584870757217247_1480975863&psig=AOvVaw3qkwKMjzdZ6DvbSi6hB83K&ust=1554367049985373') }}">
        <img class="AppStore" src="{{asset('/img/AppStoreBadge.svg')}}">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ url(' ') }}">
        <img class="GoogleStore" src="{{asset('/img/GooglePlayBadge.svg')}}">
      </a>
    </div>
  </div>

  <footer class="page-footer footerLogin font-small">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      Arbel, a university project
    </div>
  </footer>

@endsection
