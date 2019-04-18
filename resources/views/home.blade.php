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


      <?php
        $subjects = App\Subject::where('user_id', Auth::user()->id)->get();
        foreach ($subjects as $subject) {
          $courses = App\ClassModel::where('id', $subject->class_id)->get();
          foreach ($courses as $course) {


             if (!is_null($subject->user_id)) { ?>
              <div class="col-md-3" id = "spero">
                <a class = "linkCard" href="">
                  <div class = "container provaContainer card-block">
                    <div class = "row">
                      <div class = "col">
                        <div class = "circle">
                          <div class = "yearNumber"><?php echo $course->year ?></div>
                        </div>
                      </div>
                    </div>
                    <div class = "row">
                      <div class = "col">
                        <div class = "sectionTextp"><?php echo $course->course ?> (<?php echo $course->section ?>)
                        </div>
                      </div>
                    </div>
                    <div class = "row">
                      <div class = "col">
                        <div class = "descriptionText"><?php echo $subject->subjectName ?></div>
                      </div>
                    </div>
                  </div>
                  </a>
            </div>

            <?php }
            else {

              echo "porco dio 2 ore per un if";


            }
          }
      }
    ?>



 <!-- <div class="col-md-3" id = "spero">
      <a class = "linkCard" href="">
        <div class = "container provaContainer card-block">
        <div class = "row">
          <div class = "col">
            <div class = "circle">
              <div class = "yearNumber">2</div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "sectionTextp">Media Design</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
          </div>
        </div>
        </div>
        </a>
    </div>

    <div class="col-md-3" id = "spero">
      <a class = "linkCard" href="">
        <div class = "container provaContainer card-block">
        <div class = "row">
          <div class = "col">
            <div class = "circle">
              <div class = "yearNumber">3</div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "sectionTextp">Media Design</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
          </div>
        </div>
        </div>
        </a>
    </div>


    <div class="col-md-3" id = "spero">
      <a class = "linkCard" href="">
        <div class = "container provaContainer card-block">
        <div class = "row">
          <div class = "col">
            <div class = "circle">
              <div class = "yearNumber">2</div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "sectionTextp">Video Design</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
          </div>
        </div>
        </div>
        </a>
    </div>

    <div class="col-md-3" id = "spero">
      <a class = "linkCard" href="">
        <div class = "container provaContainer card-block">
        <div class = "row">
          <div class = "col">
            <div class = "circle">
              <div class = "yearNumber">1</div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "sectionTextp">Sound Design</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
          </div>
        </div>
        </div>
        </a>
    </div> -->

    <!--    <div class="col-md-3" id = "spero">
      <a class = "linkCard" href="">
        <div class = "container provaContainer card-block">
        <div class = "row">
          <div class = "col">
            <div class = "circle">
              <div class = "yearNumber">2</div>
            </div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "sectionTextp">Sound Design</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
          </div>
        </div>
        </div>
        </a>
    </div> -->

<!-- <div class="col-md-3"  id = "spero">

  <a class = "linkCard" href="">
    <div class = "container mediaContainer card-block">
    <div class = "row">
      <div class = "col">
        <img src="{{asset('/img/ill.svg')}}" class = "mediaImage">
        <hr class = "horizontalLine">
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "sectionText">Media Design</div>
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "descriptionText">Nome materia insegnata 1<br> Nome materia insegnata 2</div>
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "container-fluid yearText">year 3 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

      </div>
    </div>
    </div>
    </a>
</div> -->

  </div>
  </div>
<!-- </div> -->
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
              <input type="email" class="form-control" id = "formEmail" placeholder="inserisci le Mail">
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
        <div class="row">
          {{ __('Qui vanno messi i corsi da selezionare') }}
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer footerHome font-small">

  <div class="footer-copyright text-center">© 2019 Copyright:
    Arbel, a university project</a>
  </div>

</footer>
@endsection
