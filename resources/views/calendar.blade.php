
@extends('layouts.app')
@include('elements.nav')


@section('content')

  <div class="container">
    <div class="row calendarRow">
      <div class="col-md-12">
        <div class = "customCalendar">

        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        
        </div>
      </div>
    </div>
  </div>



@endsection
