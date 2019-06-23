<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $average = DB::table('students_marks')->where('stud_id', $id)->where('sub_id', $sub_id)->get();
        $absence = DB::table('students_subjects')->where('stud_id', $id)->where('sub_id', $sub_id)->first();
        $absenceStud = 0.0;
        $subject = \App\Subject::find($sub_id);
        $credit = 0;
        $tot = 0;
        if (DB::table('students_marks')->where('stud_id', $id)->where('sub_id', $sub_id)->exists()==true) {
        foreach ($average as $detail) {
          $tot += $detail->mark;
        }
        $media = $tot/count($average);
      }
      else {
        $media = 0;
      }
      if (DB::table('students_subjects')->where('stud_id', $id)->where('sub_id', $sub_id)->exists()==true) {
        $absenceStud += $absence->absence_hours;
      }
      else {
        $absenceStud += 0.0;
      }
        return view('studentDetail', compact('students', 'id', 'sub_id', 'media', 'absenceStud', 'average'));
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
        $tipology = $request->input('type_work');
        $subMark = $request->input('subjects');
        $mark = $request->get('mark');
        $studMark = DB::table('students_marks')
                    ->where('stud_id', $id)
                    ->where('sub_id', $subMark)
                    ->where('tipology', $tipology)->exists();
        if ($studMark == true) {
          //dd('qui');
          DB::table('students_marks')
              ->where('stud_id', $id)
              ->where('sub_id', $subMark)
              ->where('tipology', $tipology)
              ->update([
                'mark' => (int)$mark,
                'date' => Carbon::now()->format('Y-m-d')
              ]);
        }
        else {
          //dd('quiii');
          DB::table('students_marks')
              ->where('id', '[0-9]+')
              ->updateOrInsert([
                'stud_id' => $id,
                'sub_id' => (int)$subMark,
                'tipology' => $tipology,
                'mark' => (int)$mark,
                'date' => Carbon::now()->format('Y-m-d')
              ]);
        }
        \App\Student::where('id', $id)
          ->update(['details' => $request->get('note_detail')]);
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
