@extends('layouts.app')
@include('elements.navAdmin')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="registerContainer">
        <!-- <div class="card-header">{{ __('Registra docente') }}</div> -->

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} customForm" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>

              <div class="col-md-6">
                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }} customForm" name="surname" value="{{ old('surname') }}" required autofocus>

                @if ($errors->has('surname'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('surname') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Mail') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} customForm" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} customForm" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control customForm" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type= "submit" name= "submit" class="learn-more" id = "btnSubmit">
                  <div class="circle">
                    <span class="btnIcon btnArrow"></span>
                  </div>
                  <p class="submitText">Registra</p>
                </button>
                {{-- <button type="submit" class="btn btn-primary" id="registerButton">
                  {{ __('Registra') }}
                </button> --}}
              </div>
            </div>

          </form>
        </div>

      @if(session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
      @endif
    </div>
  </div>
</div>
</div>
@endsection
