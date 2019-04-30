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

<div class = "container chartContainer">
  <div class = "row">
    <div class = "col-md-9">
      <div class = "chartArea">
        <canvas id = "myAreaChart" width="100%" height="30"></canvas>
      </div>
    </div>

    <div class = "col-md-3 argumentCol">
      <div class = "row argumentRow">
        <div class = "col">
          <div class = "argumentTitle">MAGGIO 2019</div>
        </div>
      </div>

      <div class = "row argumentRow">
        <div class = "col">
          <div class = "argumentDate">Lezione 27.04.2018:</div><div class = "argumentName">Nome argomento</div>
        </div>
      </div>
      <div class = "row argumentRow">
        <div class = "col">
          <div class = "argumentDate">Lezione 27.04.2018:</div><div class = "argumentName">Nome argomento</div>
        </div>
      </div>
      <div class = "row argumentRow">
        <div class = "col">
          <div class = "argumentDate">Lezione 27.04.2018:</div><div class = "argumentName">Nome argomento</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class = "container infoContainer">
  <div class = "row">
    <div class = "col">
      <img class = "infoIcon" src="{{asset('/img/infoIcon.svg')}}" alt="Responsive image" id="footer">
      <span class = "infoText">Il grafico soprastante si basa su un calcolo della media dell'intera classe, suddiviso in mesi.<br><span class = "infoText2">Per avere maggiori dettagli, basterà cliccare sull'indicatore del mese desiderato e sarà possibile visualizzare gli argomenti trattati con la relativa data.</span></span>
    </div>
  </div>
</div>
