@extends('layouts.app')
@include('elements.nav')
@section('content')
<div class="container">
  <div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Attenzione!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
  <div class="row justify-content-center">
    <div class="profile-header-container">
      <div class="profile-header-img">
        <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
      </div>
    </div>

  </div>
  <div class="row justify-content-center">
    <form action="/profile" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <input type="file" class="form-control-file" name="avatar" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Seleziona un immagine profilo direttamente dalla tua galleria</small>
      </div>
      <button type="submit" class="btn btn-primary imageSubmitButton">Submit</button>
    </form>
  </div>
</div>
@endsection
