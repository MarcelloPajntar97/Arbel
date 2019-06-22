@extends('layouts.app')
@section('content')

  @include('elements.nav')

  <div class="container studentprofile">
    <div class="row">
      <div class="col-md-3">
        <div class="profileImg">
          <div class="card mb-4">

             <img class="imgstudent" src="{{ $students->userPicture }}"/>
            <div class="card-body">
              <div class="card-test">
                <h6 class="studentdati">Data di nascita: {{ $students->birthday }}</h6>
              </div>
              <div class="card-test">
                <h6 class="studentdati">N° di matricola: {{ $students->badgeNumber }}</h6>
              </div>
              <div class="card-test">
                <h6 class="studentdati">Borsa di studio: {{ $students->bursary }}%</h6>
              </div>
              {{-- <div class="card-test">
              <h6 class="studentdati">Media: 27.7</h6>
            </div> --}}
            {{-- <div class="card-test">
            <h6 class="studentdati">Assenze: 2%</h6>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="row">
      <div class="col">
        <h4 class="nameUser">{{ $students->name }} {{ $students->surname }}</h4> <br>
        <h6 class="mailUser" >{{ $students->email }}</h6>

        <h3 class="detailTitle">Media: {{ $media }}</h3>
        <div class="form-row">
          <div class="form-group col-md-4">


            {{-- <select class="form-control custom-dropdown">
              <option selected = "" disabled= "" class = "placeholder">Tipologia</option>
              <option>Orale</option>
              <option>Scritto</option>
              <option>Test</option>
            </select> --}}
          </div>
          <form class="form-inline" method="post" action="{{action('StudentDetailController@update', $id)}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH"/>
            <input name="subjects" type="hidden" value="{{ $sub_id }}"/>
          <div class="col-md-4">
            <input type="number" name="mark" class="form-control customForm" placeholder="Valutazione" id="inputValutazione">
          </div>
          <span class="custom-dropdown">
            <select name="type_work">
              <option selected = "" disabled= "" class = "placeholder">Tipologia</option>
              <option value="Orale">Orale</option>
              <option value="Scritto">Scritto</option>
              <option value="Test">Test</option>
            </select>
          </span>
        </div>
        @foreach ($average as $test)
        <div class="row">
          <div class = "col">
            <div class="text-left">{{ $test->tipology}} ({{ $test->date }}): {{ $test->mark }}</div>
          </div>
        </div>
        @endforeach


        <h3 class="detailTitle">Assenze: {{ $absenceStud }}%</h3>
        @foreach ($students as $studentsdetail)
          <div class="row">
            <div class = "col">
              <div class="text-left">02.01.2019</div>
            </div>
          </div>
        @endforeach

        <h3 class="detailTitle">{{ __('Note') }}</h3>
        <div class="form-row">
          <div class="form-group col">
            <textarea class="form-control customForm" id="exampleFormControlTextarea1"></textarea>
          </div>
        </div>
        <div class = "row">
          <div class = "col">
            <img class = "infoIcon" src="{{asset('/img/infoIcon.svg')}}" alt="Responsive image" id="footer">
            <span class = "infoText">E' possibile solo salvare una nota per volta. Aggiungendone una nuova quella esistente verrà sovrascritta.</span>
          </div>
        </div>

        <div class = "row">
          <div class = "col">
            <div class = "activeNote">
              E a quest’ora l’avrà bell’e divorato!...”. – Ha detto proprio così?... Dunque era lei!... Era lei!... era la mia innocenza e mi disse: «Ho visto il tu’ babbo che mi aspetta e che.
            </div>
          </div>
        </div>

        <button type= "submit" class="learn-more" id = "btnSubmit">
          <div class="circle">
            <span class="btnIcon btnArrow"></span>
          </div>
          <p class="submitText">SALVA</p>
        </button>
        {{-- <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button> --}}
      </form>
    </div>
  </div>
</div>
</div>
</div>
@endsection
