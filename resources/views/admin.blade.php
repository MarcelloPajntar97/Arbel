@extends('layouts.app')
@include('elements.navAdmin')
@section('content')
<?php
  $teachers = App\User::where('isAdmin', 0)->get();
  foreach ($teachers as $teacher) {
    echo $teacher->name. " ". $teacher->surname. "<br>";
  }
?>

@endsection
