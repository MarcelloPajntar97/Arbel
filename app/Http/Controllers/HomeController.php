<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $subjects = \App\Subject::where('user_id', \Auth::user()->id)->get();
        return view('home', compact('subjects'));
      }
      elseif (auth()->user()->isAdmin == 1) {
        $teachers = \App\User::where('isAdmin', 0)->get();
        return view('admin', compact('teachers'));
      }
    }
}
