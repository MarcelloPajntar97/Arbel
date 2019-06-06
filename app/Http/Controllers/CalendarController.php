<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


  public function index()
  {
    $event = [];
    $events= Events::all();
      foreach ($events as $row) {
        $event[] = \Calendar::event(
          $row->title,
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
    //
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
