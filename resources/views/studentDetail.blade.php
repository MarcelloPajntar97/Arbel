@extends('layouts.app')
@section('content')

@include('elements.nav')


<div class="container">
  <h3 class="detailTitle">{{ __('DETTAGLIO STUDENTE:') }}</h3>
</div>
<div class="container studentprofile">
  <div class="row">
    <div class="col-md-3">
      <div class="profileImg">
        <div class="card mb-4">

          <img class="imgstudent" src="{{ asset('storage/avatar' . $students->avatar) }}"/>
          <div class="card-body">
            <div class="card-test">
              <h6 class="studentdati">Data di nascita: {{ $students->birthday }}</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">N° di matricola: {{ $students->badgeNumber }}</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Borsa Di studio: boh</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Media: 27.7</h6>
            </div>
            <div class="card-test">
              <h6 class="studentdati">Assenze: 2%</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="row">
        <div class="col">
          <h4 class="nameUser">{{ $students->name }} {{ $students->surname }}</h4> <br>
          <h6 class="mailUser" >{{ $students->email }}</h6>
          <form>
            <h3 class="detailTitle">{{ __('Media:') }}</h3>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" class="form-control" placeholder="Inserisci la data" id="inputData">
              </div>
              <div class="form-group col-md-4">
                <select id="inputTipologia" class="form-control"  placeholder="Tipologia" >
                  <option selected> Tipologia</option>
                  <option>Orale</option>
                  <option>Scritto</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" placeholder="Valutazione" id="inputValutazione">
              </div>
            </div>
          </form>

          <h3 class="detailTitle">{{ __('Assenze:') }}</h3>
          @foreach ($students as $studentsdetail)
          <div class="row-centered">
            <div class="row">
              <div class="col-md-2 textleft">
                02/01/2019
              </div>
              <div class="col-md-1 text-centered">
                2%
              </div>
            </div>
          </div>
          @endforeach

          <h3 class="detailTitle">{{ __('Note:') }}</h3>
          <div class="form-row">
            <div class="form-group col-md-8">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Aggiungi una nota"></textarea>
            </div>
          </div>
          <button type="submit" class="btn  btn-primary  studentSubmitButton">{{ __('SALVA') }}</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
