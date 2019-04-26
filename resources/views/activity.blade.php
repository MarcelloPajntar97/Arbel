@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container switchContainer">
  <div class="row row-centered d-flex justify-content-center">
    <div class = "col-md-1 col-centered">
      <a class = "linkStudent" href="{{ url('/studentsList') }}">
        <div class = "studentBox3">Studenti</div>
      </a>
    </div>
    <div class = "col-md-1 col-centered">
      <a class = "linkStudent" href="">
        <div class = "testBox3">Test</div>
      </a>
    </div>
    <div class = "col-md-1 col-centered">
        <div class = "activityBox3">Attività</div>
    </div>
  </div>
</div>
