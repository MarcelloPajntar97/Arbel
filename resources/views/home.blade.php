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
        <div class="container" id="primaFascia">8:30 - 11:30 <span class = "activity">lorem ipsum dolor consect</span>
        </div>
        <div class="container" id="secondaFascia">12:00 - 15:00 <span class = "activity">lorem ipsum dolor consect</span>
        </div>
        <div class="container" id="terzaFascia">15:30 - 18:30 <span class = "activity">lorem ipsum dolor consect</span>
        </div>
        <div class="container" id="quartaFascia">19:00 - 21:30 <span class = "activity">lorem ipsum dolor consect</span>
        </div>
        <a class="linkCalendar" href="{{ url('/calendar') }}">Visualizza Calendario</a>
      </div>
    </div>
  </div>

</div>

<img src="{{asset('/img/sinceramente.svg')}}" class = "nextSection">

<div class = "container"><h3 class = "coursesTitle">{{ __('I MIEI CORSI') }}</h3></div>
<div class = "allCourses">

  <!-- <a href= ""><img src="{{asset('/img/nextButton.svg')}}" class = "nextButton"></a> -->


  <!-- <div class="container-fluid idk">
      <h2>Bootstrap Horizontal Scrolling with Flexbox</h2>
      <div class="row flex-row flex-nowrap">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
         <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card card-block">Card</div>
          </div>
      </div>
  </div> -->
    <div class="container-fluid idk">
    <div class = "row flex-row flex-nowrap">
      <div class="col-md-3" id = "spero">

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
              <div class = "descriptionText">Breve descrizione del corso,<br> Marcello approverà?</div>
            </div>
          </div>
          <div class = "row">
            <div class = "col">
              <div class = "container-fluid yearText">year 1 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

            </div>
          </div>
          </div>
          </a>
    </div>
    <div class="col-md-3"  id = "spero">

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
            <div class = "descriptionText">Breve descrizione del corso, <br>  Marcello approverà?</div>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <div class = "container-fluid yearText">year 1 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

          </div>
        </div>
        </div>
        </a>
  </div>
  <div class="col-md-3"  id = "spero">

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
          <div class = "descriptionText">Breve descrizione del corso,<br>  Marcello approverà?</div>
        </div>
      </div>
      <div class = "row">
        <div class = "col">
          <div class = "container-fluid yearText">year 2 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

        </div>
      </div>
      </div>
      </a>
</div>
<div class="col-md-3"  id = "spero">

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
        <div class = "descriptionText">Breve descrizione del corso,<br>  Marcello approverà?</div>
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "container-fluid yearText">year 3 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

      </div>
    </div>
    </div>
    </a>
</div>

<div class="col-md-3"  id = "spero">

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
        <div class = "descriptionText">Breve descrizione del corso,<br>  Marcello approverà?</div>
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "container-fluid yearText">year 3 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

      </div>
    </div>
    </div>
    </a>
</div>

<div class="col-md-3"  id = "spero">

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
        <div class = "descriptionText">Breve descrizione del corso,<br>  Marcello approverà?</div>
      </div>
    </div>
    <div class = "row">
      <div class = "col">
        <div class = "container-fluid yearText">year 3 <img src="{{asset('/img/goArrow.svg')}}" class = "goArrow"></div>

      </div>
    </div>
    </div>
    </a>
</div>

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
