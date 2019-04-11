@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form>
      <div class="row form-group">
      <div class = "col-md-12">
        <label for="addCourse">{{ __('Corso') }}</label>
        <input type="email" class="form-control" id = "addCourse">
      </div>
      </div>

      <div class="row form-group">
      <div class = "col-md-12">
        <label for="addSection">{{ __('Sezione') }}</label>
        <input type="text" class="form-control" id="addSection">
      </div>
      </div>

      <div class="row form-group">
      <div class = "col-md-12">
        <label for="addSubject">{{ __('Materia') }}</label>
        <input type="text" class="form-control" id="addSubject">
      </div>
      </div>

      <div class="row form-group">
      <div class = "col-md-12">
        <button type="submit" class="btn btn-primary" id="registerButton">
          {{ __('SALVA') }}
        </button>
      </div>
      </div>
      </form>
      </div>

    </div>
  </div>
</div>
@endsection
