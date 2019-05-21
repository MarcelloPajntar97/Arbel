@extends('layouts.app')
@include('elements.nav')
@section('content')

<ul class="nav nav-pills container switchContainer row row-centered  justify-content-center" id="myTabJust" role="tablist">
  <li class="nav-item col-md-1 col-centered ">
    <a class="nav-link active studentBox" id="student-tab-just" data-toggle="tab" href="#student-just" role="tab" aria-controls="student-just"
      aria-selected="true">Studenti</a>
  </li>
  <li class="nav-item">
    <a class="nav-link testBox" id="test-tab-just" data-toggle="tab" href="#test-just" role="tab" aria-controls="test-just"
      aria-selected="false">Test</a>
  </li>
  <li class="nav-item">
    <a class="nav-link activityBox" id="activity-tab-just" data-toggle="tab" href="#activity-just" role="tab" aria-controls="activity-just"
      aria-selected="false">Activity</a>
  </li>
</ul>
<div class="tab-content card pt-5" id="myTabContentJust">
  <div class="tab-pane fade show active" id="student-just" role="tabpanel" aria-labelledby="studenti-tab-just">
    <div class = "container">
        <div class="row">
          <div class="col-md-2 studentTitle">{{ __('ELENCO STUDENTI') }}</div>
          <form class="col-md-3 form-inline">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
             <button class=" btn btn-outline-primary" type="button"><img src="{{ asset('/img/exsport.svg')}}"> Exsport</button>
           </form>
        </div>

        <div class="row-centered studentContainer">
          <div class="row ">
            <div class = "col-md-2">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
            </div>
            <div class = "col-md-3 text-left">
              Nome Cognome
            </div>
            <div class = "col-md-2 text-left">
              Media
            </div>
            <div class = "col-md-2 text-left">
              Assenze
            </div>
            <div class = "col-md-2  text-left">
              Note
            </div>
            <div class = "col-md-1">
              <button class="btn" id="" type="submit"><img class = "editIcon" src="{{ asset('/img/studenti.svg')}}"></button>
            </a>
          </div>
        </div>
      </div>

      @foreach ($students as $studentdata)
      <div class="row-centered classContainer">
        <div class="row ">
          <div class = "col-md-2">
            <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
          </div>
          <div class = "col-md-3 text-left">
            {{ $studentdata->name }}  {{ $studentdata->surname }}
          </div>
          <div class = "col-md-2 text-left">
            27.5
          </div>
          <div class = "col-md-2 text-left">
            2/10
          </div>
          <div class = "col-md-2 text-left">
            Note
          </div>
          <div class = "col-md-1">
            <a  href="{{ url('#') }}" alt = "option">
              <button class="btn" id="" type="submit"><img class = "editIcon" src="{{ asset('/img/studenti.svg')}}"></button>
            </a>
          </div>
        </div>
      </div>
      @endforeach
      <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button>
    </div>

  </div>
  <div class="tab-pane fade" id="test-just" role="tabpanel" aria-labelledby="test-tab-just">

    DA MODIFICARE

  </div>
  <div class="tab-pane fade" id="activity-just" role="tabpanel" aria-labelledby="activity-tab-just">
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
  </div>
</div>
