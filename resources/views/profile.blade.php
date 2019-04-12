@extends('layouts.app')
@include('elements.nav')
@section('content')

<div class = "container"><h3 class = "coursesTitle">{{ __('IL MIO PROFILO') }}</h3></div>
<div class="container allProfile">

  <div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Attenzione!</strong> Ci sono dei problemi con il caricamento della tua immagine.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>


  <div class = "row">
    <div class = "col-md-4">
      <div class="profileImg">
        <img src="/storage/avatars/{{ $user->avatar }}" style = "width:170px; height:170px; float:left; border-radius:50%; margin-right:25px; margin-left:25px; margin-bottom:25px;" />
      </div>
      <form action="/profile" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <!-- <div class="upload-btn-wrapper">

            <input type="file" name="myfile" /><button class="btnUpload"><img class = "loadImage" src="{{asset('/img/editImage.svg')}}"></button></input>
          </div> -->

          <input type="file" class="" name="avatar"></input>
        </div>
        <button type="submit" class="btn btn-primary imageSubmitButton">Salva</button>
        <!-- <span> <button class="btn btn-primary imageSubmitButton changePassword">Modifica Password</button> </span> -->
      </form>
    </div>


    <div class = "col-md-8">
      <div class = "row">
        <div class = "col">
          <div class = "nameUser">
          {{ Auth::user()->name }} {{ Auth::user()->surname }}
          </div>
      </div>
      </div>

      <div class = "row">
        <div class = "col">
          <div class = "descriptionUser">
          Lorem ipsum dolor, prova testo. Devo capire se una descrizione del docente oppure inserire i corsi che lui tratta...
          </div>
      </div>
      </div>

      <!-- <div class = "row">
        <div class = "col-md-3">
          <button type="submit" class="btn btn-primary imageSubmitButton">Modifica Password</button>
      </div> -->
      </div>

    </div>
  </div>

  </div>
</div>
@endsection
