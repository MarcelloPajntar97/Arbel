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
        $events = Events::where('user_id', Auth::user()->id)->get();
        return view('home', compact('subjects', 'events'));
      }
      elseif (auth()->user()->isAdmin == 1) {
        $teachers = \App\User::where('isAdmin', 0)->get();
        return view('admin', compact('teachers'));
      }
    }

    function send(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
      ]);
      $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

      Mail::to($data['email'])->send(new SendMail($data));
      return back()->with('success', 'Mail inviata correttamente!');
    }
}
