@extends('layouts.app')
@include('elements.nav')

<div class = "container">
  <div class = "row allContainer">


    <div class="col-md-6 prova">
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

  <div class = "col-md-6 allCourses">
    <div class="row">
      <img class = "Mail" src="{{asset('/img/mailImage.svg')}}" alt="Responsive image" id="footer">
    </div></div>

  <!-- <div class = "col-md-6 allCourses">
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('1°  Media Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('2°  Media Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('1°  Video Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('3°  Sound Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('3°  Media Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class = "col-md-12">
        <label class="containerCheck">{{ __('1°  Penis Design') }}
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <img class = "addArrow" src="{{asset('/img/arrow.svg')}}" alt="Responsive image">
    </div>
  </div> -->



  </div>
</div>

<!-- <div class="container-fluid">
  <div class="row">
    <img class = "lineContact" src="{{asset('/img/contactBackground.svg')}}" alt="Responsive image" id="footer">
  </div>
</div> -->
