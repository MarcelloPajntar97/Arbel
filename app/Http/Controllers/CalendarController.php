<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events;

use Calendar;

class CalendarController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function __construct()
  {
    $this->middleware('auth');
  }


  public function index(Request $request)
  {
    $event = [];
    // $teacher = $request->get('subHour');
    $events= Events::where('user_id', Auth::user()->id)->get();
    foreach ($events as $row) {
      $enddate = $row->end_date."24:00:00";
      $event[] = \Calendar::event(
        $row->activity,
        true,
        new \DateTime($row->day),
        new \DateTime($row->day),
        $row->id,

        // Add color and link on event
        [
          'color' => 'rgba(2,117,216,0.2)',
          // 'url' => 'pass here url and any route',
        ]

      );
    }

    $calendar = \Calendar::addEvents($event)
    ->setCallbacks([
      'eventClick' => 'function(event) { alert(event.title)}',
      'dayClick' => 'function(event) { alert("prova")}',
    ])
    ->setOptions([ //set fullcalendar options
      'contentHeight' => 10,

    ]);
    return view('calendar', compact('events','calendar'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    // $events = Events::find($id);
    // return view('editUser')->with('events', $events);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
