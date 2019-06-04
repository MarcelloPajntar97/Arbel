@include('elements.nav')
@extends('layouts.app')
@section('content')

{!! Form:open(array('route' => 'events.add', 'method' => 'POST', 'files' =>'true')) !!}
<div class = "row">
  <div class = "col-md-12">
    @if (Session::has('success'))
      <div class = "alert alert-success"> {{ Session::get('success')}}</div>
    @elseif (Session::has('warning'))
      <div class = "alert alert-danger"> {{Session::get('warning')}}</div>
    @endif
  </div>

  <div class = "col-md-4">
    <div class = "form-group">
      {!! Form::label('weekDay', 'Week Day: ') !!}
      <div class = "">
        {!! Form::text('weekDay', null, ['class' => 'form-control']) !!}
        {!! $errors->first('weekDay', '<p class = "alert alert-danger">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class = "col-md-3">
    <div class = "form-group">
      {!! Form::label('weekHour', 'Week Hour: ') !!}
      <div class = "">
        {!! Form::text('weekHour', null, ['class' => 'form-control']) !!}
        {!! $errors->first('weekHour', '<p class = "alert alert-danger">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class = "col-md-3">
    <div class = "form-group">
      {!! Form::label('start_date', 'Start Date: ') !!}
      <div class = "">
        {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('start_date', '<p class = "alert alert-danger">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class = "col-md-3">
    <div class = "form-group">
      {!! Form::label('end_date', 'End Date: ') !!}
      <div class = "">
        {!! Form::text('end_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('end_date', '<p class = "alert alert-danger">:message</p>') !!}
      </div>
    </div>
  </div>
  {!! Form:close() !!}

</div>
@endsection
