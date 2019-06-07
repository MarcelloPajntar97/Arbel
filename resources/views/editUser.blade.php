@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class="container">

  <ul class="nav nav-pills container switchContainer row row-centered  justify-content-center" id="myTabJust" role="tablist">
    <li class="nav-item col-md-1 col-centered firstItem">
      <a class="nav-link active subjectBox" id="subject-tab-just" data-toggle="tab" href="#subject-just" role="tab" aria-controls="subject-just"
      aria-selected="true">Materie</a>
    </li>
    <li class="nav-item col-md-1 col-centered secondItem">
      <a class="nav-link hourBox" id="hour-tab-just" data-toggle="tab" href="#hour-just" role="tab" aria-controls="hour-just"
      aria-selected="false">Orario</a>
    </li>
  </ul>


  <h2 class = "nameTeacher"> {{ $teacher->name }} {{ $teacher->surname }}</h2>
  <div class="editContainer">
    <div class="tab-content card pt-5" id="myTabContentJust">
      <div class="tab-pane fade show active" id="subject-just" role="tabpanel" aria-labelledby="subject-tab-just">
    <div class = "row">
      @if (count($errors) > 0)
        <div class = "alert alert-danger">
          <ul>
            @foreach ($error->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if (\Session::has('success'))
        <div class = "alert alert-success">
          <p>{{\Session::get('success')}}</p>
        </div>
      @endif
    </div>






    <div class="row">

    <div class = "col-md-5">
        <form method="post" action="{{action('SecretaryController@update', $id)}}">
    @csrf
    <input name="_method" type="hidden" value="PATCH"/>
    <input name="docente" type="hidden" value="{{ $teacher->id }}"/>
    <h2 class = "titleDrop">Assegnazione corso e materia</h2>
  <div class="row form-group">
  <div class = "col">
    <span class="custom-dropdown">
    <select name="courses">
      <option selected = "" disabled= "" class = "placeholder">Seleziona il corso</option>
        @foreach ($courses as $value)
          <option value="{{ $value->id }}">{{ $value->year }} {{ $value->section }} {{ $value->course }} </option>
        @endforeach
    </select>
  </span>
  </div>
  </div>
  <div class="row form-group">
  <div class = "col">
    <span class="custom-dropdown">
    <select name="subject">
      <option selected = "" disabled= "">Seleziona la materia</option>
    </select>
    </span>
  </div>
  </div>
  <div class="row form-group">
  <div class = "col">
    <button type="submit" class="btn btn-primary" id="registerButton">
      {{ __('SALVA') }}
    </button>
  </div>
  </div>
  </form>
    </div>

    <div class = "col-md-5">
      <h2 class = "titleDrop">Corsi e materia assegnati</h2>
        @foreach ($subjects as $subject)
          @foreach ($subject->class()->get() as $course)
            <div class = "teacherDate"> {{ $course->year }} {{ $course->course }} ({{ $course->section}}) - {{ $subject->subjectName}} </div></br>
          @endforeach
        @endforeach
      </div>
    </div>
  </div>

    <div class="tab-pane fade" id="hour-just" role="tabpanel" aria-labelledby="hour-tab-just">


      <form method="post" action = "{{action('CalendarController@store', $id)}}">

        {{csrf_field() }}
        {{-- <label for = "">Enter Name of Event</label>
        <input type = "text" class = "form-control" name= "title" placeholder="Enter the Name" /><br> --}}

        <label for = ""> Inserisci la data e la fascia oraria di inizio</label>
        <input type = "datetime-local" class = "form-control" name= "start_date" class = "date"/><br>
        <label for = ""> Inserisci la data e la fascia oraria di fine</label>
        <input type = "datetime-local" class = "form-control" name= "end_date" class = "date"/><br>

        <div class="row form-group">
        <div class = "col">
          <span class="custom-dropdown">
          <select name="subject">
            <option selected = "" disabled= "">Seleziona la materia</option>
            @foreach ($subjects as $subject)
              @foreach ($subject->class()->get() as $course)
                {{-- <div class = "teacherDate"> {{ $subject->subjectName}} </div></br> --}}

                <option value="{{ $subject->subjectName }}">{{ $subject->subjectName}} </option>
                {{-- <input name="subHour" type="hidden" value="{{ $subject->id }}"/> --}}
              @endforeach
            @endforeach
          </select>
          </span>
        </div>
        </div>

        <input type= "submit" name= "submit" class = "btn btn-primary" value="Aggiungi" />



</div>
</div>
  </div>
</div>
</div>
@endsection
