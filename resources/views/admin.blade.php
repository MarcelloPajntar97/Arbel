@extends('layouts.app')
@include('elements.navAdmin')
@section('content')
<div class="container">
<?php
$teachers = App\User::where('isAdmin', 0)->get();
foreach ($teachers as $teacher) {
  echo $teacher->name. " ". $teacher->surname;?>
  <form action="{{action('SecretaryController@destroy', $teacher->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
  <br>
  <?php
}
?>
</div>
@endsection
