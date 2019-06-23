@extends('layouts.app')
@section('content')

  <?php $data=0; ?>
  <div class="container-fluid calendarSection">
    @include('elements.nav')
    <div class="container todayContainer">
      <div class="row">
        <div class="col-md-7 hourPart">
          <div class="allHour">

            <div class="row">
              <div class="col">
                <div class="daySelected">
                  {{$todayFormatted}}
                </div>
              </div>
            </div>

            @foreach ($events as $event)
              @if ($event->day == $today)
                <div class="row rowHour" id="prego fabrizio">
                  <div class="col-md-3 colHour">
                    <div class="text-left" id="primaFascia">{{$event->start_hour}} - {{$event->end_hour}}</div>
                  </div>
                  <div class="col-md-8">
                    <p class="activity text-left">{{$event->activity}}</p>
                  </div>
                </div>
              @endif
            @endforeach

          </div>
        </div>
        <div class="col-md-5">
          <div id="calendar">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="nextSection"><h3 class="coursesTitle">{{ __('I MIEI CORSI') }}</h3></div>
  <div class="allCourses">
    <div class="container-fluid idk">
      <div class="row flex-row flex-nowrap">
        @if ( $subjects->count() == 0)
          <div class="col-md-3" id="spero">
            <div class="linkCard">
              <div class="container provaContainer card-block">

                <div class="row">
                  <div class="col">
                    <div class="circle">
                      <div class="yearNumber">n</div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="sectionText">Corso, sezione
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="descriptionText">Nome materia</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contaier defaultCourses">
              <img class="infoIcon" src="{{asset('/img/infoIcon.svg')}}">
              <span class="infoText">
                Card di default.<br>
                In questa sezione il docente visionerà i corsi in cui insegna, con il relativo anno, sezione e materia associati.<br><br>
                Nel caso in cui si visualizzi questa sezione di default, fare riferimento alla segretieria e assicurarsi di esser stati correttamente registrati.
              </span>
            </div>
          </div>
        @else
          @foreach ($subjects as $subject)
            @foreach ($subject->class()->get() as $course)
              <div class="col-md-3" id="spero">
                <a class="linkCard" href="/studentslist/{{$course->id}}/edit/{{$subject->id}}">
                  <?php $data=$course->id; ?>
                  <div class="container provaContainer card-block">

                    <div class="row">
                      <div class="col">
                        <div class="circle">
                          <div class="yearNumber">{{ $course->year }}</div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="sectionText">{{ $course->course }} ({{ $course->section }})
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="descriptionText">{{ $subject->subjectName }}</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          @endforeach
        @endif
      </div>
    </div>
  </div>
  <form method="post" action="{{ url('home/send') }}" class="arbelMail">
    <div class="container"><h3 class="contactTitle">{{ __('CONTATTA') }}</h3></div>
    {{ csrf_field() }}
    <div class="container allContainer">

      <div class="row sendContainer">
        <div class="col-md-6 firstPart">

          <div class="row form-group">
            <div class="col-md-12">
              <h2 class="infoForm">Destinatari</h2>
              <input type="text" name="email" class="form-control toMail customForm" value="" placeholder="@mail" />
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <h2 class="infoForm">Oggetto</h2>
              <input type="text" name="subject" class="form-control customForm" id="formObject" placeholder=" ">
            </div>
            @if(count($errors) > 0)
              <br>
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <ul>
                  @foreach($errors->all() as $error)
                    <br>
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            @if($message = Session::get('success'))
              <br>
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
              </div>
            @endif
          </div>
        </div>
        <div class="col-md-6 secondPart">

          <div class="row form-group">
            <div class="col-md-12">
              <h2 class="infoForm">Messaggio</h2>
              <textarea name="message" class="form-control customForm" id="formTextarea" rows="5"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <button type="submit" class="learn-more" id="btnSubmit">
                <div class="circle">
                  <span class="btnIcon btnArrow"></span>
                </div>
                <p class="submitText">INVIA</p>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid newColorBg">
      <footer class="page-footer footerHome font-small">
        <div class="footer-copyright text-center">© 2019 Copyright:
          Arbel, a university project
        </div>
      </footer>
    </div>
  </form>
@endsection
