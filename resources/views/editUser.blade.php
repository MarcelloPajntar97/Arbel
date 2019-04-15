@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class = "container editContainer">
    <div class="col-md-6">
      <form method="post" action="{{action('SecretaryController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <input name="docente" type="hidden" value="{{ $teacher->id }}">
        <h2 class = "nameTeacher">Stai modificando {{ $teacher->name }} {{ $teacher->surname }}</h2>
      <div class="row form-group">
      <div class = "col-md-12">
        <!-- <label for="course">A quali corsi insegna {{ $teacher->name }}?</label><br> -->
        <span class="custom-dropdown">
        <select name="courses">
          <option selected = "" disabled= "" class = "placeholder">Seleziona il corso</option>
          <?php
            $courses = \App\ClassModel::all();
            foreach ($courses as $value) {
          ?>

          <option value="{{ $value->id }}">{{ $value->year }} {{ $value->section }} {{ $value->course }} </option>
        <?php } ?>
        </select>
      </span>
      </div>
      </div>
      <div class="row form-group">
      <div class = "col-md-12">
        <span class="custom-dropdown">
        <select name="subject">
          <option selected = "" disabled= "">Seleziona la materia</option>
        </select>
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
</div>

@endsection
