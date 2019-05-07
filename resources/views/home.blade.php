@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container"><h3 class = "todayTitle">{{ __('ORARIO') }}</h3></div>
<div class="container todayContainer">
  <div class="row">
    <div class = "col-md-1 allWeek">
      <div class = "weekContainer navigation" id="navigation">
        <div class = "row rowDay">
          <a class= "linkDay activeDay" href= "home">
          <!-- <a href="#" class="active"> -->
            <div class = "col">
              <div class = "month text-center">APRILE</div>
              <div class = "day text-center">8</div>
            </div>
          </a>
        </div>
      <div class = "row rowDay">
        <a class= "linkDay" href= "home">
          <div class = "col colDay">
            <!-- <div class = "monthSelected">APRILE</div>
            <div class = "daySelected text-center">9</div> -->
            <div class = "month text-center">APRILE</div>
            <div class = "day text-center">9</div>
          </div>
        </a>
      </div>
      <div class = "row rowDay">
        <a class= "linkDay" href= "home">
          <div class = "col colDay">
            <div class = "month">APRILE</div>
            <div class = "day text-center">10</div>
          </div>
        </a>
      </div>
      <div class = "row rowDay">
        <a class= "linkDay" href= "home">
          <div class = "col colDay">
            <div class = "month">APRILE</div>
            <div class = "day text-center">11</div>
          </div>
        </a>
      </div>
      <div class = "row">
        <a class= "linkDay" href= "home">
          <div class = "col colDay">
            <div class = "month">APRILE</div>
            <div class = "day text-center">12</div>
          </div>
        </a>
      </div>

      </div>
    </div>


    <div class="col-md-11 ">
      <div class="card-body allHour">
      <div class = "row rowHour">
        <div class = "col-md-2 colHour">
          <div class="container" id="primaFascia">8:30 - 11:30</div>
        </div>
        <div class = "col-md-9">
          <p class = "activity">2° Media Design (S106), programmazione 2</p>
        </div>
      </div>

        <div class = "row rowHour">
          <div class = "col-md-2 colHour">
            <div class="container" id="primaFascia">12:00 - 15:00</div>
          </div>
          <div class = "col-md-9">
            <p class = "activity">2° Media Design (S106), programmazione 2</p>
          </div>
        </div>

          <div class = "row rowHour">
            <div class = "col-md-2 colHour">
              <div class="container" id="primaFascia">15:30 - 18:30</div>
            </div>
            <div class = "col-md-9">
              <p class = "activity">1° Video Design (S8), After Effects</p>
            </div>
          </div>

            <div class = "row rowHour">
              <div class = "col-md-2 colHour">
                <div class="container" id="primaFascia">19:00 - 21:00</div>
              </div>
              <div class = "col-md-9">
                <p class = "activity"> // </p>
              </div>
            </div>

        <a class="linkCalendar" href="{{ url('/calendar') }}">Visualizza Calendario</a>
      </div>
      </div>
    </div>
  </div>

<a href = "#nextSection"><img src="{{asset('/img/sinceramente.svg')}}" class = "nextSection"></a>

<div class = "container" id = "nextSection"><h3 class = "coursesTitle">{{ __('I MIEI CORSI') }}</h3></div>
<div class = "allCourses">

    <div class="container-fluid idk">
    <div class = "row flex-row flex-nowrap">
      @if ( $subjects->count() == 0)
      <div class="col-md-3" id ="spero">
        <div class = "linkCard">
          <div class = "container provaContainer card-block">
            <div class = "row">
              <div class = "col">
                <div class = "circle">
                  <div class = "yearNumber">n</div>
                </div>
              </div>
            </div>
            <div class = "row">
              <div class = "col">
                <div class = "sectionTextp">Corso, sezione
                </div>
              </div>
            </div>
            <div class = "row">
              <div class = "col">
                <div class = "descriptionText">Nome materia</div>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="col-md-4">
      <div class = "contaier defaultCourses">
        <img class = "infoIcon" src="{{asset('/img/infoIcon.svg')}}">
        <span class = "infoText">
        Card di default.<br>
        In questa sezione il docente visionerà i corsi in cui insegna, con il relativo anno, sezione e materia associati.<br><br>
        Nel caso in cui si visualizzi questa sezione di default, fare riferimento alla segretieria e assicurarsi di esser stati correttamente registrati.
      </span>
      </div>
</div>



      @else
        @foreach ($subjects as $subject)
          @foreach ($subject->classData()->get() as $course)
              <div class="col-md-3" id ="spero">
                <a class = "linkCard" href="{{ url('/studentsList') }}">
                  <div class = "container provaContainer card-block">
                    <div class = "row">
                      <div class = "col">
                        <div class = "circle">
                          <div class = "yearNumber">{{ $course->year }}</div>
                        </div>
                      </div>
                    </div>
                    <div class = "row">
                      <div class = "col">
                        <div class = "sectionTextp">{{ $course->course }} ({{ $course->section }})
                        </div>
                      </div>
                    </div>
                    <div class = "row">
                      <div class = "col">
                        <div class = "descriptionText">{{ $subject->subjectName }}</div>
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


<div class = "container"><h3 class = "contactTitle">{{ __('CONTATTA') }}</h3></div>
<form method="post" action= "{{ url('home/send') }}">

  {{ csrf_field() }}
<div class = "container-fluid newColorBg">

  <div class = "container allContainer">
    <div class = "row sendContainer">
      <div class="col-md-6 firstPart">

          <div class="row form-group">
            <div class = "col-md-12">
              <label for="formEmail">{{ __('Destinatari') }}</label>
              <input type="text" name="email" class="form-control" value="" placeholder="inserisci le mail o seleziona i corsi" />
            </div>
          </div>

          <div class="row form-group">
            <div class = "col-md-12">
              <label for="formObject">{{ __('Oggetto') }}</label>
              <input type="text" name="subject" class="form-control" id="formObject" placeholder="inserisci l'oggetto">
            </div>
            @if(count($errors) > 0)
              <br>
              <div class = "alert alert-danger">
                <button type = "button" class = "close" data-dismiss = "alert">x</button>
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
              <div class = "alert alert-success alert-block">
                <button type = "button" class = "close" data-dismiss = "alert">x</button>
                <strong>{{ $message }}</strong>
              </div>
            @endif
          </div>
          </div>
          <div class="col-md-6 firstPart">
           <div class="row form-group">
            <div class = "col-md-12">
              <label for="formTextarea">{{ __('Messaggio') }}</label>
              <textarea name="message" class="form-control" id="formTextarea" rows="5"></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class = "col-md-12">
              <button type="submit" name="send" value="Send" class="btn btn-primary sendButton">{{ __('INVIA') }}</button>
            </div>
          </div>
        </div>

</div>
</div>
</div>
</form>


<footer class="page-footer footerHome font-small">

  <div class="footer-copyright text-center">© 2019 Copyright:
    Arbel, a university project
  </div>

</footer>
@endsection
