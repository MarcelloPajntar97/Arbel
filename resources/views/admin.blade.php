@extends('layouts.app')
@include('elements.navAdmin')
@section('content')

<div class = "container">
  <div class="titleUsers">{{ __('UTENTI REGISTRATI') }}</div>


  <!-- <div class="containerAllUser"> -->

  <?php
  $teachers = App\User::where('isAdmin', 0)->get();
  foreach ($teachers as $teacher) { ?>
    <div class="row containerAllUser">
      <div class = "col-md-3">
    <?php echo $teacher->name?>  <?php echo $teacher->surname?>
      </div>
        <div class = "col-md-3">
      da mettere la data di iscrizione
        </div>

          <div class = "col-md-3">
        <?php echo $teacher->email?>
          </div>
            <div class = "col-md-3 text-center">
              <form action="{{action('SecretaryController@destroy', $teacher->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" id="deleteUser" type="submit"><img class = "trashIcon" src="{{ asset('/img/trashIcon.svg')}}"></button>
              </form>
            </div>
    </div>
    <?php
  }
  ?>
</div>
@endsection
