@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

  <div class="container">
    <ul class="nav nav-pills container switchContainer row row-centered justify-content-center" id="myTabJust" role="tablist">
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
      <div class="tab-content" id="tabContainer">
        <div class="tab-pane fade show active" id="subject-just" role="tabpanel" aria-labelledby="subject-tab-just">

          <div class="row">
            <div class="col-md-5">
              <form method="post" action="{{action('SecretaryController@update', $id)}}">
                @csrf
                <input name="_method" type="hidden" value="PATCH"/>
                <input name="docente" type="hidden" value="{{ $teacher->id }}"/>

                <div class="row form-group">
                  <div class="col">
                    <h2 class="titleDrop">Selezona il corso</h2>
                    <span class="custom-dropdown">
                      <select name="courses">
                        <option selected="" disabled="" class="placeholder"> </option>
                        @foreach ($courses as $value)
                          <option value="{{ $value->id }}">{{ $value->year }} {{ $value->section }} {{ $value->course }} </option>
                        @endforeach
                      </select>
                    </span>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col">
                    <h2 class="titleDrop">Seleziona la materia</h2>
                    <span class="custom-dropdown">
                      <select name="subject">
                        <option selected="" disabled=""> -- </option>
                      </select>
                    </span>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col">
                    <button type="submit" class="learn-more" id="btnSubmit">
                      <div class="circle">
                        <span class="btnIcon btnArrow"></span>
                      </div>
                      <p class="submitText">Aggiungi</p>
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-md-5 coursesCol">
              <h2 class="titleView">Corsi e materie assegnati</h2>
              @foreach ($subjects as $subject)
                @foreach ($subject->class()->get() as $course)
                  <div class="teacherDate"> {{ $course->year }} {{ $course->course }} ({{ $course->section}}) - {{ $subject->subjectName}} </div></br>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="hour-just" role="tabpanel" aria-labelledby="hour-tab-just">
          <div class="row form-group">
            <div class="col-md-5">
              <form method="post" action="{{action('SecretaryController@store', $id)}}">
                @csrf
                <input name="_method" type="hidden" value="POST"/>
                <div class="row form-group">
                  <div class="col">
                    <h2 class="titleDrop">Seleziona la materia</h2>
                    <span class="custom-dropdown">
                      <select name="activity">
                        <option selected="" disabled=""> -- </option>

                        @foreach ($subjects as $subject)
                          @foreach ($subject->class()->get() as $course)
                            <option value="{{ $course->year }}° {{ $course->course }}, {{ $subject->subjectName}}">{{ $course->year }} {{ $course->course }} ({{ $course->section}}) - {{ $subject->subjectName}} </option>
                          @endforeach
                        @endforeach

                      </select>
                    </span>
                  </div>
                </div>

                <div class="row form-group">
                  <input name="docente" type="hidden" value="{{ $teacher->id }}"/>
                  <div class="col-md-6">
                    <h2 class="titleDrop">Seleziona il giorno</h2>
                    <input type="date" id="dateInput" class="form-control dayInput " name="day" class = "date"/>
                  </div>
                  <div class="col-md-6 hourSelect">
                    <h2 class="HourDrop">Seleziona la fascia oraria</h2>
                    <span class="custom-dropdown" id="calendar-dropdown">
                      <select name="start_hour">
                        <option selected="" disabled= "">Dalle</option>
                        <option value="8:30">8:30</option>
                        <option value="12:00">12:00</option>
                        <option value="15:30">15:30</option>
                        <option value="19:00">19:00</option>
                      </select>
                    </span>

                    <span class="custom-dropdown" id="calendar-dropdown">
                      <select name="end_hour">
                        <option selected="" disabled="">Alle</option>
                        <option value="11:30">11:30</option>
                        <option value="15:00">15:00</option>
                        <option value="18:30">18:30</option>
                        <option value="21:00">21:00</option>
                      </select>
                    </span>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col">
                    <button type="submit" name="submit" class="learn-more" id="btnSubmit">
                      <div class="circle">
                        <span class="btnIcon btnArrow"></span>
                      </div>
                      <p class="submitText">Aggiungi</p>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 hourCol">
              <h2 class="titleView">Orari assegnati</h2>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
