@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container"><h3 class = "coursesTitle">{{ __('DETTAGLIO STUDENTE:') }}</h3></div>
<div class="container studentprofile">


  <div class = "row">
    <div class = "col-md-3">
      <div class="profileImg">
        <div class="card mb-4">
          <img src="/storage/avatars/{{ $students->avatar }}" style = "width:170px; height:170px; float:left; border-radius:50%; margin-left:25px; margin-bottom:25px;" />
          <div class="card-body">
            <div class="card-test">
              <h6 class="studentdati">Data di nascita: {{ $students->birthday }}</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">N° di matricola: {{ $students->badgeNumber }}</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Borsa Di studio: boh</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Media: 27.7</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Assenze: 2%</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class = "col-md-8">
      <div class = "row">
        <div class = "col">
          <h4 class = "nameUser">{{ $students->name }} {{ $students->surname }}</h4> <br>
          <h6 class = "mailUser" >{{ $students->email }}</h6>

            <ul class="nav nav-pills container switchContainer row row-centered  " id="myTabJust" role="tablist">
              <li class="nav-item col-md-3 col-centered ">
                <a class="nav-link active studentBox" id="student-tab-just" data-toggle="tab" href="#student-just" role="tab" aria-controls="student-just"
                aria-selected="true">Media</a>
              </li>
              <li class="nav-item col-md-3">
                <a class="nav-link testBox" id="test-tab-just" data-toggle="tab" href="#test-just" role="tab" aria-controls="test-just"
                aria-selected="false">Assenze</a>
              </li>
              <li class="nav-item col-md-3">
                <a class="nav-link activityBox" id="activity-tab-just" data-toggle="tab" href="#activity-just" role="tab" aria-controls="activity-just"
                aria-selected="false">Note</a>
              </li>
            </ul>
            <div class="tab-content card pt-5" id="myTabContentJust">
              <div class="tab-pane fade show active" id="student-just" role="tabpanel" aria-labelledby="studenti-tab-just">
                <div class = "container">
                  <div class="row-centered studentContainer">
                    <div class="row ">
                      <div class = "col-md-4 ">
                        Data
                      </div>
                      <div class = "col-md-3 text-left">
                        Tipologia
                      </div>
                      <div class = "col-md-3 text-centered">
                        Valutazione
                      </div>
                    </div>
                  </div>

                  <div class="row-centered classContainer">
                    <div class="row">
                      <div class = "col-md-4 ">
                        22/02/2019
                      </div>
                      <div class = "col-md-3 text-centered">
                        Fenomelogia delle arti contemporanee
                      </div>
                      <div class = "col-md-3 text-centered">
                        27
                      </div>
                    </div>
                  </div>
                  <!-- <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button> -->
                  <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('AGGIUNGI VOTO') }}</button>
                </div>
              </div>
              <div class="tab-pane fade" id="test-just" role="tabpanel" aria-labelledby="test-tab-just">
                DA MODIFICARE
              </div>
            </div>
            <div class="tab-pane fade" id="test-just" role="tabpanel" aria-labelledby="test-tab-just">
              DA MODIFICARE
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
