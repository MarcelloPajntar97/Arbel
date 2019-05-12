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


  <div class = "container">
    <div class="studentTitle">{{ __('ELENCO STUDENTI') }}</div>

    <div class="row-centered studentContainer">
    <div class="row ">
      <div class = "col-md-3">
        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
      </div>
      <div class = "col-md-3 text-left">
         Nome Cognome
       </div>
      <div class = "col-md-3 text-left">
        Data di nascita
      </div>
      <div class = "col-md-3  text-left">
        Note
      </div>
    </div>
  </div>

    @foreach ($students as $studentdata)
    <div class="row-centered classContainer">
      <div class="row ">
        <div class = "col-md-3">
          <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
        </div>
        <div class = "col-md-3 text-left">
          {{ $studentdata->name }}  {{ $studentdata->surname }}
        </div>
        <div class = "col-md-3 text-left">
          {{ $studentdata->birthday }}
        </div>
        <div class = "col-md-3 text-left">
          {{$studentdata->note}}
        </div>
        <!-- <div class = "col-md-1 text-left">
          <a href="{{action('StudentListController@edit', $studentdata->id)}}" alt = "Gestisci Docente">
            <button class="btn" id="" type="submit"><img class = "editIcon" src="{{ asset('/img/studenti.svg')}}"></button>
          </a>
        </div> -->
      </div>
    </div>
    @endforeach
    <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button>
  </div>
