@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="post" action="{{action('SecretaryController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <h2>Stai modificando {{ $teacher->name }} {{ $teacher->surname }}</h2>
      <div class="row form-group">
      <div class = "col-md-12">
        <label for="addCourse">Quali materie insegna {{ $teacher->name }}?</label><br>
        <!--<input type="email" class="form-control" id = "addCourse"> -->
        <?php
          $subjects = App\Subject::all();
          foreach ($subjects as $subject) {
        ?>
          <input type="checkbox" name="subject" value="{{ $subject->id }}">{{ $subject->subjectName }}<br>
      <?php } ?>
      </div>
      </div>

      <!-- <div class="row form-group">
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
      </div> -->

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
