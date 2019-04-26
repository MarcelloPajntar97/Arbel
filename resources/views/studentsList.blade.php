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
</div>
