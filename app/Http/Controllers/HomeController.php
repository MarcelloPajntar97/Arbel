<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
use App\Events;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    if (auth()->user()->isAdmin == 0) {
      $subjects = auth()->user()->subjects()->get();
      // $events = Events::where('user_id', Auth::user()->id)->get();

      $event = [];
      // $teacher = $request->get('subHour');
      $dt = new \DateTime();
      $today= $dt->format('Y-m-d');
      $todayFormatted = $dt-> format('d F, l');

      //dd($today);
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
          ]

        );
      }

      $calendar = \Calendar::addEvents($event)
      ->setCallbacks([
        // 'eventClick' => 'function(event) { alert(event.title)}',
        'dayClick' => 'function(date, jsEvent, view) {console.log(date.format()) }',
         // $('#calendar').fullCalendar('gotoDate', date);
      ])
      ->setOptions([ //set fullcalendar options
        'firstDay' => 1,
        'contentHeight' => 300,
        'contentWidth' => 100,
        'height' => 'auto',
        'eventLimit' => 1,
        'selectable' => true,
        'aspectRatio' => 1,
        'header' => [
          'left' => 'title',
          'center' =>'',
          'right' =>'prev,next'],
        ]);

        return view('home', compact('subjects', 'events', 'calendar', 'today', 'todayFormatted'));
      }
      elseif (auth()->user()->isAdmin == 1) {
        $teachers = \App\User::where('isAdmin', 0)->get();
        return view('admin', compact('teachers'));
      }
    }

    function send(Request $request) {
      $this->validate($request, [
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required'
      ]);
      $multiple = explode(", ", $request->email);
      for ($i=0; $i<count($multiple); $i++) {
      $data = array(
        'email' => $multiple[$i],
        'subject' => $request->subject,
        'message' => $request->message
      );

      Mail::to($data['email'])->send(new SendMail($data));
      }
      return back()->with('success', 'Mail inviata correttamente!');
    }
  }
