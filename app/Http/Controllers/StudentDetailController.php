<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentDetailController extends Controller
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
        return view('studentDetail');
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
    // public function edit($id)
    // {
    //     $students = \App\Student::find($id);
    //     return view('studentDetail', compact('students', 'id'));
    // }


    public function editDetail($id, $sub_id)
    {
        $students = \App\Student::find($id);
        return view('studentDetail', compact('students', 'id', 'sub_id'));
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
        $subMark = $request->input('subjects');
        $mark = $request->get('mark');
        $studMark = DB::table('students_subjects')
                    ->where('stud_id', $id)
                    ->where('sub_id', $subMark)->exists();
        if ($studMark == true) {
          //dd('qui');
          DB::table('students_subjects')
              ->where('stud_id', $id)
              ->where('sub_id', $subMark)
              ->update([
                'mark' => (int)$mark
              ]);
        }
        else {
          //dd('quiii');
          DB::table('students_subjects')
              ->where('id', '[0-9]+')
              ->updateOrInsert([
                'stud_id' => $id,
                'sub_id' => (int)$subMark,
                'absence_hours' => 0,
                'mark' => (int)$mark
              ]);
        }
        return redirect('/home');
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
