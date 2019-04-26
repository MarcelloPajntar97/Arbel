@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container"><h3 class = "todayTitle">{{ __('ORARIO') }}</h3></div>
<div class="container todayContainer">
  <div class="row">
    <div class = "col-md-1 allWeek">
      <div class = "weekContainer navigation" id="navigation">
        <div class = "row">
          <a href="#" class="active">
            <div class = "col selectDay">
              <div class = "month text-center">APRILE</div>
              <div class = "day text-center">8</div>
            </div>
          </a>
        </div>
      <div class = "row">
        <a href="#">
          <div class = "col activeDay">
            <div class = "monthSelected">APRILE</div>
            <div class = "daySelected text-center">9</div>
          </div>
        </a>
      </div>
      <div class = "row">
        <a href="#">
          <div class = "col selectDay">
            <div class = "month">APRILE</div>
            <div class = "day text-center">10</div>
          </div>
        </a>
      </div>
      <div class = "row">
        <a href="#">
          <div class = "col selectDay">
            <div class = "month">APRILE</div>
            <div class = "day text-center">11</div>
          </div>
        </a>
      </div>
      <div class = "row">
        <a href="#">
          <div class = "col selectDay">
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

<img src="{{asset('/img/sinceramente.svg')}}" class = "nextSection">

<div class = "container"><h3 class = "coursesTitle">{{ __('I MIEI CORSI') }}</h3></div>
<div class = "allCourses">

    <div class="container-fluid idk">
    <div class = "row flex-row flex-nowrap">


        @foreach ($subjects as $subject)
          <?php $courses = \App\ClassModel::where('id', $subject->class_id)->get();?>
          @foreach ($courses as $course)
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

  </div>
  </div>
</div>


<div class = "container"><h3 class = "contactTitle">{{ __('CONTATTA') }}</h3></div>

<div class = "container-fluid newColorBg">

  <div class = "container allContainer">
    <div class = "row sendContainer">
      <div class="col-md-6 firstPart">
        <form>
          <div class="row form-group">
            <div class = "col-md-12">
              <label for="formEmail">{{ __('Destinatari') }}</label>
              <input type="email" class="form-control" id = "formEmail" placeholder="inserisci le Mail o seleziona i corsi">
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
        <div class="row rowSelectTitile">
          <div class = "col-md-12">
            <div class = "selectCourse">{{ __('Invia a:') }}</div>
        </div>
      </div>
      @foreach ($subjects as $subject)
        <?php $courses = \App\ClassModel::where('id', $subject->class_id)->get();?>
        @foreach ($courses as $course)
        <div class="row rowSelectCourse">
          <div class = "col">
            <a href="">
              <div class = "contactCourses">
                <!-- <img class = "selectArrow" src="{{asset('/img/arrow2.svg')}}"/><span> -->
                  {{ $course->year }} {{ $course->course }} ({{ $course->section }})
                <!-- </span> -->
              </div>
            </a>
          </div>
        </div>
        @endforeach
      @endforeach
    </div>
  </div>
</div>

<footer class="page-footer footerHome font-small">

  <div class="footer-copyright text-center">© 2019 Copyright:
    Arbel, a university project</a>
  </div>

</footer>
@endsection
