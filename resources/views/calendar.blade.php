@include('elements.nav')
@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="?ym= {{$prev}}" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title">{{$title}}</span></li>
            <li class="list-inline-item"><a href="?ym= {{$next}}" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar">Today</a></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THU</th>
                    <th>FRI</th>
                    <th>SAT</th>
                    <th>SUN</th>
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
