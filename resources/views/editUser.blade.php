@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">
  <h2 class = "nameTeacher"> {{ $teacher->name }} {{ $teacher->surname }}</h2>
  <div class="editContainer">
    <div class="row">

    <div class = "col-md-5">
        <form method="post" action="{{action('SecretaryController@update', $id)}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH"/>
    <input name="docente" type="hidden" value="{{ $teacher->id }}"/>
    <h2 class = "titleDrop">Assegnazione corso e materia</h2>
  <div class="row form-group">
  <div class = "col">
    <span class="custom-dropdown">
    <select name="courses">
      <option selected = "" disabled= "" class = "placeholder">Seleziona il corso</option>
        @foreach ($courses as $value)
          <option value="{{ $value->id }}">{{ $value->year }} {{ $value->section }} {{ $value->course }} </option>
        @endforeach
    </select>
  </span>
  </div>
  </div>
  <div class="row form-group">
  <div class = "col">
    <span class="custom-dropdown">
    <select name="subject">
      <option selected = "" disabled= "">Seleziona la materia</option>
    </select>
    </span>
  </div>
  </div>
  <div class="row form-group">
  <div class = "col">
    <button type="submit" class="btn btn-primary" id="registerButton">
      {{ __('SALVA') }}
    </button>
  </div>
  </div>
  </form>
    </div>

    <div class = "col-md-5">
      <h2 class = "titleDrop">Corsi e materia assegnati</h2>

        <?php
        $subjects = App\Subject::where('user_id', $teacher->id)->get();
        foreach ($subjects as $subject) {
          $courses = App\ClassModel::where('id', $subject->class_id)->get();
          foreach ($courses as $course) { ?>
            <div class = "teacherDate"> {{ $course->year }} {{ $course->course }} ({{ $course->section}}) - {{ $subject->subjectName}} </div></br>
        <?php
          }
        } ?>

      </div>
    </div>



    </div>
  </div>
</div>
@endsection
