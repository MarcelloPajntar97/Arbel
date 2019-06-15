@extends('layouts.app')
@section('content')

  @include('elements.nav')


  <ul class="nav nav-pills container switchContainer row row-centered  justify-content-center" id="myTabJust" role="tablist">
    <li class="nav-item optionTab">
      <a class="nav-link active studentBox" id="student-tab-just" data-toggle="tab" href="#student-just" role="tab" aria-controls="student-just"
      aria-selected="true">Studenti</a>
    </li>
    <li class="nav-item optionTab">
      <a class="nav-link testBox" id="test-tab-just" data-toggle="tab" href="#test-just" role="tab" aria-controls="test-just"
      aria-selected="false">Test</a>
    </li>
    <li class="nav-item optionTab">
      <a class="nav-link activityBox" id="activity-tab-just" data-toggle="tab" href="#activity-just" role="tab" aria-controls="activity-just"
      aria-selected="false">Attività</a>
    </li>
  </ul>


  <div class="tab-content card pt-5" id="myTabContentJust">
    <div class="tab-pane fade show active" id="student-just" role="tabpanel" aria-labelledby="studenti-tab-just">
      <div class = "container">
        <div class="row toolBar">
          <div class = "col-md-2">
            <div class="studentTitle">{{ __('ELENCO STUDENTI') }}</div>
          </div>
          <div class = "col-md-5 colSearch">
            <form>

              <input type="search " class = "inputSearch searchBtn" type="text" placeholder="Cerca">
            </form>
            {{-- <input class="form-control btn-outline-primary searchBtn" type="text" placeholder="Search" aria-label="Search"> --}}
          </div>
          <div class = "col-md-5">
            <button class="btn btn-outline-primary exportBtn pull-right" type="button"><img src="{{ asset('/img/exsport.svg')}}">  Esporta</button>
          </div>

          <form class="form-inline" method="post" action="{{action('StudentListController@update', $id)}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH"/>
            <input name="subjects" type="hidden" value="{{ $sub_id }}"/>



          </div>

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
          </div>
        </div> --}}

      </div>
    </div>

    @foreach ($students as $studentdata)
    <?php $detailStudent = DB::table('students_subjects')
                    ->where('stud_id', $studentdata->id)
                    ->where('sub_id', $sub_id)->exists();
          $detailStud = DB::table('students_subjects')
                            ->where('stud_id', $studentdata->id)
                            ->where('sub_id', $sub_id)->get(); ?>
      <div class="row-centered classContainer">
        <div class="row ">
          <div class = "col-md-1" id="bo">
            <input class="form-check-input" type="checkbox" name="students[]" id="blankCheckbox" value="{{ $studentdata->id }}" aria-label="...">
          </div>
          <div class = "col-md-2 text-left">
            {{ $studentdata->name }}  {{ $studentdata->surname }}
          </div>
          @if ($detailStudent == true)
            @foreach ($detailStud as $detail)
              <div class = "col-md-1 text-centered">
                --
              </div>
              <div class = "col-md-1 text-centered">
                {{ $detail->absence_hours }} %
              </div>
            @endforeach
          @else
          <div class = "col-md-1 text-centered">
            --
          </div>
          <div class = "col-md-1 text-centered">
            --
          </div>
          @endif
          <div class = "col-md-6 text-left">
            {{ $studentdata->details }}
          </div>
          <div class = "col-md-1">
            <a  href="{{ action('StudentDetailController@edit', $studentdata->id) }}" alt = "option">
              <div class="more"><img class = "moreIcon" src="{{ asset('/img/More.svg')}}"></div>
            </a>
          </div>
        </div>
      </div>
    @endforeach
    <div class="row form-group">

      <button type= "submit" class="learn-more" id = "btnSubmit">
        <div class="circle">
          <span class="btnIcon btnArrow"></span>
        </div>
        <p class="submitText">SALVA</p>
      </button>

      {{-- <button type="submit" id="btnClick" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button> --}}
    </div>
  </form>
</div>

</div>
<div class="tab-pane fade" id="test-just" role="tabpanel" aria-labelledby="test-tab-just">

  <div class = "container">
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item disabled">Seleziona un quesito</a>
          <a class="list-group-item title">  <input class="form-control" type="text" placeholder="Search" aria-label="Search"></a>
          <a class="list-group-item argomentoBox" id="list-argomento-list" data-toggle="list" href="#list-argomento" role="tab" aria-controls="argomento">Argomento</a>
          <a class="list-group-item argomentoBox" id="list-argomento-list" data-toggle="list" href="#list-argomento" role="tab" aria-controls="argomento">argomento</a>
          <a class="list-group-item argomentoBox" id="list-argomento-list" data-toggle="list" href="#list-argomento" role="tab" aria-controls="argomento">argomento</a>
          <a class="list-group-item argomentoBox" id="list-argomento-list" data-toggle="list" href="#list-argomento" role="tab" aria-controls="argomento">argomento</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-argomento" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container">
              <h3 class="title">{{ __('Crea il tuo Test') }}</h3>
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Prima Domanda : </label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Seconda Domanda :</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Inserisci qui la Domanda">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput3">Terza Domanda :</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Inserisci qui la Domanda">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput3">Quarta Domanda :</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Inserisci qui la Domanda">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput4">Quinta Domanda :</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Inserisci qui la Domanda">
                </div>
              </form>

              <button type= "submit" class="learn-more" id = "btnSubmit">
                <div class="circle">
                  <span class="btnIcon btnArrow"></span>
                </div>
                <p class="submitText">INVIA</p>
              </button>


              {{-- <button type="submit" id="btnClick" class="btn  btn-primary  studentSubmitButton">{{ __('INVIA') }}</button> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
<!-- <script type="text/javascript">
$(function () {
$("#btnClick").click(function () {
var selected = new Array();

$("#bo input[type=checkbox]:checked").each(function () {
selected.push(this.value);
});

if (selected.length > 0) {
alert("Selected values: " + selected.join(","));
}
});
});
</script> -->
