<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events;

class SecretaryController extends Controller
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
      $events = Events::all();
      // $events= Events::where('user_id', Auth::user()->id)->get();
      return view('editUser', compact('events'));

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
        'activity' => 'required',
         // 'user_id' => 'required',
        'day' => 'required',
        'start_hour' => 'required',
        'end_hour' => 'required',
      ]);

      $events = new Events;

      // $calendar = \App\Subject::find($id);
      // $subHour = \App\Calendar::where('sub_id', $calendar->id)->get();
      // $this->edit();
      // $teacher = $request->input('docente');
      // $teacher = $this->getTeacher;
      $events->activity = $request->get('activity');
      $events->day = $request->input('day');
      $events->start_hour = $request->input('start_hour');
      $events->end_hour = $request->input('end_hour');
      $events->user_id = (int)$request->get('docente');
      $id = $events->user_id;
      $events->save();
      $teacher = \App\User::find($events->user_id);
      $event = Events::where('user_id', $events->user_id)->first();
      $courses = \App\ClassModel::all();
      $subjects = \App\Subject::where('user_id', $teacher->id)->get();

      //return redirect('editUser')->with('success', ['events'=>$events, 'teacher'=>$teacher, ]);
      return view('editUser', compact('teacher', 'event', 'request', 'id', 'courses', 'subjects'));
      //return back();


    }

    // public function put(Request $request, $id)
    // {
    //   $this->validate($request, [
    //     'activity' => 'required',
    //      // 'user_id' => 'required',
    //     'start_date' => 'required',
    //     'end_date' => 'required',
    //   ]);
    //
    //   $events = new Events;
    //
    //   // $calendar = \App\Subject::find($id);
    //   // $subHour = \App\Calendar::where('sub_id', $calendar->id)->get();
    //   // $this->edit();
    //   // $teacher = $request->input('docente');
    //   // $teacher = $this->getTeacher;
    //   $events->activity = $request->get('activity');
    //   $events->start_date = $request->input('start_date');
    //   $events->end_date = $request->input('end_date');
    //   $events->user_id = (int)$request->get('docente');
    //   $events->save();
    //   $teacher = \App\User::find($events->user_id);
    //
    //   $event = Events::where('user_id', $events->user_id);
    //   // return redirect('editUser')->with('success', 'Evento aggiunto correttamente!');
    //   return view('editUser', compact('teacher', 'event', 'request', 'id'));
    //
    //
    // }

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
      $teacher = \App\User::find($id);
      //$this->getTeacher = $teacher;
      $subjects = \App\Subject::where('user_id', $teacher->id)->get();
      // $subjects = \App\Subject::where('user_id', $teacher->id)->get();
      $courses = \App\ClassModel::all();
      //$event = Events::where('user_id', $id)->get();
      //dd($event);
      return view('editUser', compact('teacher', 'id', 'courses', 'subjects'));
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
      $sub = $request->get('subject');
      DB::table('subjects')
          ->where('id', $sub)
          ->update([
            'user_id' => $request->get('docente')
          ]);
          $teacher = \App\User::find($id);
          $subjects = \App\Subject::where('user_id', $teacher->id)->get();
          $courses = \App\ClassModel::all();
          $event = Events::where('user_id', $id)->first();
        return view('editUser', compact('teacher', 'id', 'courses', 'subjects', 'event'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $teacher = \App\User::find($id);
      $teacher->delete();
      return redirect('/home');
    }
}
