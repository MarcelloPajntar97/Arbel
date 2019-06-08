
@extends('layouts.app')
@include('elements.nav')


@section('content')

  <div class="container">
    <div class="row calendarRow">
      <div class="col-md-12">
        <div id ="calendar">



          {!! $calendar->calendar() !!}
          {!! $calendar->script() !!}

        </div>
      </div>
    </div>
  </div>


  {{-- <script type='text/javascript'>
  $(function() {
  ;
  $('#calendar-{{$calendar->getId()}}').fullCalendar({

  dayClick: function(date) {
  alert('clicked ');
  },

  });

  });
  </script> --}}
  @endsection
