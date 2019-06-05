<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;

class CalendarController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view ('calendar');
  }

  public function addEvent(Request $request)
  {

    $validator = Validator::make($request->all(),[
      'weekDay' => 'required',
      'weekHour' => 'required',
      'start_date' => 'required',
      'end_date' => 'required'
    ]);

    if ($validator->fails()) {
      \Session::flash('warning', 'Inserisci dati validi');
      return Redirect::to('/calendar')->withInput()->withErrors($validator);
    }

    $event = new Event;
    $event->weekDay = $request['weekDay'];
    $event->weekHour = $request['weekHour'];
    $event->start_date = $request['start_date'];
    $event->end_date = $request['end_date'];
    $event->save();

    \Session::flash('success', 'Evento aggiunto correttamente.');
    return Redirect::to('/calendar');
  }
}
