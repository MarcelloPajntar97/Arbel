@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-body">

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Corso') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Sezione') }}</label>

              <div class="col-md-6">
                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Materia') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" id="registerButton">
                  {{ __('SALVA') }}
                </button>
              </div>
            </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
