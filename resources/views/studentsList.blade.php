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


  <div class = "container">
    <div class="studentTitle">{{ __('ELENCO STUDENTI') }}</div>

    <div class="row-centered studentContainer">
    <div class="row ">
      <div class = "col-md-1">
        {{-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled> --}}
       </div>
      <div class = "col-md-2 text-left">
         Nome Cognome
       </div>
       <div class = "col-md-1 text-centered">
         Media
       </div>
      <div class = "col-md-1 text-centered">
        Assenze
      </div>
      <div class = "col-md-6  text-left">
        Note
      </div>
      {{-- <div class = "col-md-1">
          <button class="btn" id="" type="submit"><img class = "editIcon" src="{{ asset('/img/studenti.svg')}}"></button>
        </a>
      </div> --}}
    </div>
  </div>

    @foreach ($students as $studentdata)
    <div class="row-centered classContainer">
      <div class="row ">
        <div class = "col-md-1">
          <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
        </div>
        <div class = "col-md-2 text-left">
          {{ $studentdata->name }}  {{ $studentdata->surname }}
        </div>
        <div class = "col-md-1 text-centered">
          27.5
        </div>
        <div class = "col-md-1 text-centered">
          5%
        </div>
        <div class = "col-md-6 text-left">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Olè continua?
        </div>
        <div class = "col-md-1">
          <a  href="{{ url('#') }}" alt = "option">
            <div class="more"><img class = "editIcon" src="{{ asset('/img/More.svg')}}"></div>
          </a>
        </div>
      </div>
    </div>
    @endforeach
    <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button>
  </div>
