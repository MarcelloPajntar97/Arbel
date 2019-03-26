@extends('layouts.app')
@include('elements.nav')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
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
  </div>
</div>
@endsection
