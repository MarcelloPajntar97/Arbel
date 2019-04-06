@extends('layouts.app')
@include('elements.nav')
@section('content')
<div class="container prova1">
  <div class="row justify-content-between">
    <div class="col">
      <div class="card">
        <div class="card-header">Orario Odierno</div>
        <div class="card-body">
          <div class="container" id="primaFascia">8:30-11:30</div>
          <div class="container" id="secondaFascia">12:00-15:00</div>
          <div class="container" id="terzaFascia">15:30-18:30</div>
          <div class="container" id="quartaFascia">19:00-21:30</div>
          <div><a class="nav-link" href="{{ url('/calendar') }}">Visualizza Calendario</a></div>
        </div>
        </div>
    </div>
</div>
</div>

<div class = "container"><h3 class = "coursesTitle">{{ __('I miei corsi') }}</h3></div>

<!-- <div class = "container-fluid newColorBg"> -->

<div class = "container allCourses">
  <div class = "row">

    <div class="col-md-3">
      <a href="">
      <div class = "container mediaContainer">
        <div class = "mediaText">Media Design</div>
      </div>
    </a>
    </div>

    <div class="col-md-3">
      <a href="">
      <div class = "container videoContainer">
        <div class = "mediaText">Video Design</div>
      </div>
    </a>
    </div>

    <div class="col-md-3">
      <a href="">
      <div class = "container soundContainer">
        <div class = "mediaText">Sound Design</div>
      </div>
    </a>
    </div>

    <div class="col-md-3">
      <a href="">
      <div class = "container graphicContainer">
        <div class = "mediaText">Graphic Design</div>
      </div>
    </div>
  </a>
  </div>

  <div class = "row">
    <div class="col-md-3">
      <a href="">
      <div class = "container photoContainer">
        <div class = "mediaText">Fotografia</div>
      </div>
    </a>
    </div>

    <div class="col-md-3">
      <a href="">
      <div class = "container comunicationContainer">
        <div class = "mediaText">Comunicazione</div>
      </div>
    </a>
    </div>

  </div>


  </div>



<div class = "container"><h3 class = "contactTitle">{{ __('Contatta') }}</h3></div>

<div class = "container-fluid newColorBg">

<div class = "container allContainer">
  <div class = "row sendContainer">


    <div class="col-md-6 firstPart">
      <form>
    <div class="row form-group">
      <div class = "col-md-12">
        <label for="formEmail">{{ __('Destinatari') }}</label>
        <input type="email" class="form-control" id = "formEmail" placeholder="inserisci le Mail">
      </div>
    </div>

    <div class="row form-group">
      <div class = "col-md-12">
        <label for="formObject">{{ __('Oggetto') }}</label>
        <input type="text" class="form-control" id="formObject" placeholder="inserisci l'oggetto">
      </div>
    </div>

    <div class="row form-group">
      <div class = "col-md-12">
        <label for="formTextarea">{{ __('Messaggio') }}</label>
        <textarea class="form-control" id="formTextarea" rows="5"></textarea>
      </div>
    </div>

    <div class="row form-group">
      <div class = "col-md-12">
        <button type="submit" class="btn btn-primary sendButton">{{ __('INVIA') }}</button>
      </div>
    </div>
  </form>
  </div>

  <div class = "col-md-6 coursesList">
    <div class="row">
      {{ __('Qui vanno messi i corsi da selezionare') }}
    </div></div>




  </div>
</div>

</div>
@endsection
