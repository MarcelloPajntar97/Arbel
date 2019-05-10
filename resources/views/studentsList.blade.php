@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container switchContainer">
  <div class="row row-centered d-flex justify-content-center">
    <div class = "col-md-1 col-centered">
      <div class = "studentBox">Studenti</div>
    </div>
    <div class = "col-md-1 col-centered">
      <a class = "linkStudent" href="">
        <div class = "testBox">Test</div>
      </a>
    </div>
    <div class = "col-md-1 col-centered">
      <a class = "linkStudent" href="{{ url('/activity') }}">
      <div class = "activityBox">Attività</div>
      </a>
    </div>
  </div>

<div class="row  container">

  @foreach ($students as $studentdata)
  <div class="row studentContainer">
    <div class = "col-md-3 form-check">
      <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
    </div>
    <div class = "col-md-3">
      {{ $studentdata->name }}  {{ $studentdata->surname }}
    </div>
    <div class = "col-md-3">
      {{ $studentdata->email }}
    </div>
  </div>
  @endforeach

  <button type="submit" class="btn btn-primary studentSubmitButton">SALVA</button>
</div>
