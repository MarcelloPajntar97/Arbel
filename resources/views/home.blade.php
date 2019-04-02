@extends('layouts.app')
@include('elements.nav')
@section('content')
<div class="container">
  <div class="row justify-content-between">
    <div class="col">
      <div class="card">
        <div class="card-header">Orario Odierno</div>
        <div class="card-body">
          <div class="container" id="primaFascia">8:30-11:30</div>
          <div class="container" id="secondaFascia">12:00-15:00</div>
          <div class="container" id="terzaFascia">15:30-18:30</div>
          <div class="container" id="quartaFascia">19:00-21:30</div>
        </div>
        </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header">I Miei Corsi</div>
        <div class="card-body">
          <div class="container" id="corsi"><a href="#" class="text-dark btn btn-link">1A  Media Design</a></div>
          <div class="container" id="corsi"><a href="#" class="text-dark btn btn-link">2A  Suond Design</a></div>
          <div class="container" id="corsi"><a href="#" class="text-dark btn btn-link">2B  Video Design</a></div>
          <div class="container" id="corsi"><a href="#" class="text-dark btn btn-link">3A  Media Design</a></div>

        </div>
  </div>
</div>
@endsection
