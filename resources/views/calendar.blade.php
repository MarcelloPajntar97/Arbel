
@extends('layouts.app')
@include('elements.nav')


@section('content')

  <div class="container">
    <div class="row calendarRow">
      <div class="col-md-12">
        <div class = "customCalendar">
          <div id = "calendar">



        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <script type="text/javascript">
  $(document).ready(function () {
    $('#calendar').fullCalendar({
      header: {
        left:   'today',
        center: 'prev title next',
        right:  ''
      }
        })
      });

    </script> --}}
@endsection
