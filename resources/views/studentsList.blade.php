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

          </div>
          <div class = "col-md-5">
            <button class="btn btn-outline-primary exportBtn pull-right" type="button"><img src="{{ asset('/img/exsport.svg')}}">  Esporta</button>
          </div>

          <form id="absence" class="form-inline" method="post" action="{{action('StudentListController@update', $id)}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH"/>
            <input name="subjects" type="hidden" value="{{ $sub_id }}"/>
          </div>

          <div class="row-centered studentContainer">
            <div class="row ">
              <div class = "col-md-1 text-center">
                A
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

            </div>
          </div>

          @foreach ($students as $studentdata)
            @php
            $detailAbsence = DB::table('students_subjects')
            ->where('stud_id', $studentdata->id)
            ->where('sub_id', $sub_id)->exists();
            $detailAbs = DB::table('students_subjects')
            ->where('stud_id', $studentdata->id)
            ->where('sub_id', $sub_id)->get();
            $detailStudent = DB::table('students_marks')
            ->where('stud_id', $studentdata->id)
            ->where('sub_id', $sub_id)->exists();
            $detailStud = DB::table('students_marks')
            ->where('stud_id', $studentdata->id)
            ->where('sub_id', $sub_id)->get();

            $media = 0;
            if ($detailStudent==true) {

              if (count($detailStud)>1) {
                $tot = 0;
                foreach ($detailStud as $stud) {
                  $tot += $stud->mark;
                }
                $media = $tot/count($detailStud);
              }
              else {
                foreach ($detailStud as $stud) {
                  $media = $stud->mark;

                }
              }
            }
            else {
              $media = 0;
            }

            @endphp

            <div class="row-centered classContainer">
              <div class="row ">
                <div class = "col-md-1" id="bo">
                  <input class="form-check-input" type="checkbox" name="students[]" id="blankCheckbox" value="{{ $studentdata->id }}" aria-label="...">
                </div>

                <div class = "col-md-2 text-left">
                  {{ $studentdata->name }}  {{ $studentdata->surname }}
                </div>
                <div class = "col-md-1 text-centered">
                  {{ $media }}
                </div>
                @if ($detailAbsence == true)
                  @foreach ($detailAbs as $det)
                    @if ($det->absence_hours > 20.0)
                    <div class = "col-md-1 text-centered">
                      NON IDONEO
                    </div>
                    @else
                    <div class = "col-md-1 text-centered">
                      {{ $det->absence_hours }}%
                    </div>
                    @endif
                  @endforeach
                @else
                  <div class = "col-md-1 text-centered">
                    0%
                  </div>
                @endif
                    <div class = "col-md-6 text-left">
                      {{ $studentdata->details }}
                    </div>
                <div class = "col-md-1">
                  <a  href="/studentDetail/{{ $studentdata->id }}/course/{{ $sub_id }}" alt = "option">
                    <div class="more"><img class = "moreIcon" src="{{ asset('/img/More.svg')}}"></div>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
          <div class="row form-group">

            <button class="learn-more" type = "button" id ="btnSubmit" data-toggle="modal" data-target = "#topic">
              <div class="circle">
                <span class="btnIcon btnArrow"></span>
              </div>
              <p class="submitText">SALVA</p>
            </button>

          </div>

        </div>

        <div class="modal fade" id="topic" tabindex="-1" role="dialog" aria-labelledby="myModalLAbel">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

              <div class="modal-body">

                <h2 class = "infoForm">Inserisci l'argomento odierno</h2>
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" name ="dayArgument" class="form-control validate">


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                <button id="send" type="submit" class="btn btn-primary">Invia</button>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
    {{-- TEST TAB --}}

    <div class="tab-pane fade" id="test-just" role="tabpanel" aria-labelledby="test-tab-just">

      <div class = "container">
        <div class="row">
          <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item disabled">Seleziona un quesito</a>
              <a class="list-group-item title">  <input class="form-control" type="text" placeholder="Search" aria-label="Search"></a>

            </div>

            @php
            $argumentData = \App\Argument::where('sub_id', $sub_id)->get();
            @endphp

            <ul class="nav nav-pills">
              <li class="active"><a data-toggle="pill" href="#home">Default </a></li><br>
              @foreach ($argumentData as $argument)
                <li><a data-toggle="pill" href="#{{ $argument->topic}}"> {{ $argument->topic}} </a></li>
              @endforeach
            </ul>


          </div>
          <div class = "col-md-8">
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              @foreach ($argumentData as $argument)

                <div id="{{ $argument->topic}}" class="tab-pane fade">

                  <form id="questions" class="form-inline" method="post" action="{{action('StudentListController@store', $id)}}">
                    @csrf
                    <input name="topicID" type="hidden" value="{{ $argument->id }}"/>
                    <div class="row form-group">
                      <label for="formGroupExampleInput">Prima Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Seconda Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Terza Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Quarta Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Quinta Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Sesta Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Settima Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Ottava Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Nona Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <div class="row form-group">
                      <label for="formGroupExampleInput">Decima Domanda : </label>
                      <input type="text" name = "question[]" class="form-control" id="formGroupExampleInput" placeholder="Inserisci qui la Domanda">
                    </div>

                    <button type= "submit" class="learn-more" id = "btnSubmit" method="post" action="{{action('HomeController@send', $id)}}">
                      <div class="circle">
                        <span class="btnIcon btnArrow"></span>
                      </div>
                      <p class="submitText">INVIA</p>
                    </button>
                  </form>
                </div>
              @endforeach
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
<script type="text/javascript">( function ( $ ) {

	var charts = {
		init: function () {
			// -- Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontColor = '#292b2c';

			// this.createCompletedJobsChart();
      this.ajaxGetTopicMonthlyData();
		},

    ajaxGetTopicMonthlyData: function() {




      var studID = parseInt({!! json_decode($id) !!});
      console.log(studID);
      var subID = parseInt({!! json_decode($sub_id) !!});
      console.log(subID);
      var stud = studID.toString();
      console.log(stud);
      var sub = subID.toString();
      console.log(sub);
      var urlPath = 'http://' + window.location.hostname + '/studentslist' + '/' + stud + '/' + 'edit' + '/' + sub;
      var request = $.ajax({
        method: 'GET',
        url: urlPath
      });

      request.done( function (response) {
        // console.log('here' + response);
        charts.createCompletedJobsChart(response);
      });
    },

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function (response) {
      var prova = @json($pizza);
      var split = prova.split(",");

      console.log('mesi ' + split);

			var ctx = document.getElementById("myAreaChart");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: split, // mesi su asse x
					datasets: [{
						label: "Media",
						lineTension: 0.5,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
						data: [0, 10, 20, 30] // media su asse y
					}],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 5
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: 30, // The response got from the ajax request containing max limit for y axis
								maxTicksLimit:15,
							},
							gridLines: {
								color: "rgba(0, 0, 0, .05)",
							}
						}],
					},
					legend: {
						display: false
					}
				}
			});
		}
	};

	charts.init();

} )( jQuery );
</script>
@endsection
