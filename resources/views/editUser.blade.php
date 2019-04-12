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
        <label for="addCourse">A quali corsi insegna {{ $teacher->name }}?</label><br>
        <!--<input type="email" class="form-control" id = "addCourse"> -->
        <select>
        <?php
          $courses = App\ClassModel::all();
          $materia = 0;
          foreach ($courses as $course) {
        ?>
          <!-- <input type="checkbox" name="subjects" value="{{ $course->id }}">{{ $course->year }} {{ $course->section }} {{ $course->course }}<br> -->
          <option id="selectCourse" value="{{ $course->id }}">{{ $course->year }} {{ $course->section }} {{ $course->course }}</option>
      <?php
        $materia = $course->id;
    } ?>
    </select>
      </div>
      </div>


      <div class="row form-group">
      <div class = "col-md-12">
        <label for="addSubject">Quali materie insegna {{ $teacher->name }}?</label><br>
        <select>
        <?php
          $subjects = App\Subject::where('class_id', '=', $materia)->get();
          foreach ($subjects as $subject) {
        ?>
          <!-- <input type="checkbox" name="subjects" value="{{ $course->id }}">{{ $course->year }} {{ $course->section }} {{ $course->course }}<br> -->
          <option value="{{ $subject->id }}">{{ $subject->subjectName }}</option>
      <?php } ?>
    </select>
        <!-- <input type="text" class="form-control" id="addSubject"> -->
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
<?php dd($materia) ?>
@endsection
