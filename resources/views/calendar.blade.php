@include('elements.nav')
@extends('layouts.app')
@section('content')
    <div class="container calendar">
        <ul class="list-inline listcalendar text-center">
            <li class="list-inline-item"><a href="?ym= {{$prev}}" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="titleCalendar">{{$title}}</span></li>
            <li class="list-inline-item"><a href="?ym= {{$next}}" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar">Today</a></p>
        <table class="table table-bordered">
            <thead>
                <tr >
                    <th class="dayWeek">MON</th>
                    <th class="dayWeek">TUE</th>
                    <th class="dayWeek">WED</th>
                    <th class="dayWeek">THU</th>
                    <th class="dayWeek">FRI</th>
                    <th class="dayWeek">SAT</th>
                    <th class="dayWeek">SUN</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($weeks as $week)
                      {!! $week !!}
                    @endforeach
            </tbody>
        </table>
    </div>

@endsection
