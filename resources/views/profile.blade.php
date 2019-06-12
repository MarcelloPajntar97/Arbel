@extends('layouts.app')
@section('content')

@include('elements.nav')


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
    <div class = "col-md-3">
      <div class="profileImg">
        <img src="/storage/avatars/{{ $user->avatar }}" style = "width:170px; height:170px; float:left; border-radius:50%; margin-left:25px; margin-bottom:25px;" />
      </div>
      <form action="/profile" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <!-- <div class="upload-btn-wrapper">

            <input type="file" name="myfile" /><button class="btnUpload"><img class = "loadImage" src="{{asset('/img/editImage.svg')}}"></button></input>
          </div> -->

          <!-- <input type="file" id='my_file' class="" name="avatar"></input> -->


          <div style="height:0px;overflow:hidden">
           <input type="file" id="fileInput" name="avatar" />
          </div>
          <div class = "uploadShape">
          <button type="button" class="btnUpload" onclick="chooseFile();"><img src="{{asset('/img/editImage.svg')}}"></button>
        </div>

        </div>
        <button type="submit" class="btn btn-primary imageSubmitButton">SALVA</button>
        <!-- <span> <button class="btn btn-primary imageSubmitButton changePassword">Modifica Password</button> </span> -->
      </form>
    </div>


    <div class = "col-md-8">
      <div class = "row">
        <div class = "col">
          <h4 class = "nameUser">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h4> <br>
          <h6 class = "mailUser" >{{ Auth::user()->email }}</h6>
      </div>
      </div>

      <div class = "row">
        <div class = "col">
          <div class = "descriptionUser">
          Senza ombra di dubbio il miglior professore della storia, passione nell'insegnamento, sfruttamento un po' minorile, ma di sani principi e sempre disposto ad aiutare chi ha bisogno.
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
<script>
   function chooseFile() {
      $("#fileInput").click();
   }
</script>
@endsection
