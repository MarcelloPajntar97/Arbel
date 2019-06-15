@extends('layouts.app')
@section('content')

  @include('elements.nav')

  <div class="container studentprofile">
    <div class="row">
      <div class="col-md-3">
        <div class="profileImg">
          <div class="card mb-4">

            {{-- <img class="imgstudent" src="{{ $students->userPicture }}"/> --}}
            <img class="imgstudent" src="{{asset('/img/userDefault.jpg')}}"/>
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
        {{-- <form> --}}
        <h3 class="detailTitle">Media: 27</h3>
        <div class="form-row">
          <div class="col-md-4">
            <input type="date" class="form-control customForm" placeholder="Inserisci la data" id="inputData">
          </div>
          <div class="form-group col-md-4">
            <span class="custom-dropdown">
              <select name="type">
                <option selected = "" disabled= "" class = "placeholder">Tipologia</option>
                <option>Orale</option>
                <option>Scritto</option>
                <option>Test</option>
              </select>
            </span>

            {{-- <select class="form-control custom-dropdown">
              <option selected = "" disabled= "" class = "placeholder">Tipologia</option>
              <option>Orale</option>
              <option>Scritto</option>
              <option>Test</option>
            </select> --}}
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control customForm" placeholder="Valutazione" id="inputValutazione">
          </div>
        </div>
        <div class="row">
          <div class = "col">
            <div class="text-left">Tipologia (00.00.00): Voto</div>
          </div>
        </div>
        <div class="row">
          <div class = "col">
            <div class="text-left">Tipologia (00.00.00): Voto</div>
          </div>
        </div>
        <div class="row">
          <div class = "col">
            <div class="text-left">Tipologia (00.00.00): Voto</div>
          </div>
        </div>
        <div class="row">
          <div class = "col">
            <div class="text-left">Tipologia (00.00.00): Voto</div>
          </div>
        </div>

        {{-- </form> --}}

        <h3 class="detailTitle">Assenze: 00%</h3>
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
