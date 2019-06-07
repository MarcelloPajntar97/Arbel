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
          $row->subject,
          true,
          new \DateTime($row->start_date),
          new \DateTime($row->end_date.' +1 day'),
          $row->id,

          // Add color and link on event
          [
            'color' => 'rgba(2,117,216,0.2)',
            // 'url' => 'pass here url and any route',
          ]

        );
      }

    $calendar = \Calendar::addEvents($event);
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
    $this->validate($request, [
      'subject' => 'required',

      'start_date' => 'required',
      'end_date' => 'required',
    ]);

    $events = new Events;

    // $calendar = \App\Subject::find($id);
    // $subHour = \App\Calendar::where('sub_id', $calendar->id)->get();
    $teacher = $request->get('docente');
    $events->subject = $request->get('subject');
    $events->start_date = $request->input('start_date');
    $events->end_date = $request->input('end_date');
    $events->user_id = 1;

    $events->save();

    return view('editUser', compact('teacher'));


  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
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
    //
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
