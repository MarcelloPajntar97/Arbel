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
      <?php echo $teacher->created_at?>
        </div>

          <div class = "col-md-3">
        <?php echo $teacher->email?>
          </div>
            <div class = "col-md-1 text-center">
              <a href="{{action('SecretaryController@edit', $teacher->id)}}" alt = "Gestisci Docente">
                <button class="btn editBtn" id="editUser" type="submit"><img class = "editIcon" src="{{ asset('/img/editIcon.svg')}}"></button>
              </a>
            </div>

            <div class = "col-md-1 text-center">
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
