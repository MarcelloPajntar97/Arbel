<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Subject;
use App\ClassModel;
use App\Student;
use App\Events;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// use App\Student;

class UserLogController extends Controller
{
  public $successStatus = 200;
  /**
  * login api
  *
  * @return \Illuminate\Http\Response
  */
  public function login() {
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
      $user = Auth::user();
      $subjects = auth()->user()->subjects()->get();
      $dataReminder = auth()->user()->memories()->get();
      $events = auth()->user()->event()->get();
      // $students = auth()->class()->students()->get();
      $courses = array();
      foreach ($subjects as $subject) {
        foreach ($subject->class()->get() as $course) {
          array_push($courses, $course);
        }
      }

      $success['token'] =  $user->createToken('MyApp')->accessToken;
      $success['id'] =  $user->id;
      $success['name'] =  $user->name;
      $success['surname'] =  $user->surname;
      $success['email'] =  $user->email;
      $success['subjects'] =  $subjects;
      $success['memories'] = $dataReminder;
      $success['events'] = $events;
      // $success['students'] =  $students;
      $success['courses'] =  $courses;
      return response()->json(['success' => $success], $this->successStatus);
    }
    else {
      return response()->json(['error'=>'Unauthorized'], 401);
    }
  }

  public function studentsList() {
    $data = auth()->user()->subjects()->get();
    $dataStudent = array();
    $final = array();
    foreach ($data as $student) {
      foreach ($student->class()->get() as $course) {
        $students = Student::where('class_id', $course->id)->get();
        array_push($dataStudent, $students);
      }
    }
    for ($i=0; $i<count($dataStudent); $i++) {
      for ($k=0; $k<count($dataStudent[$i]); $k++) {
        array_push($final, $dataStudent[$i][$k]);
      }
    }
    $prova = ['students' => $final];
    $res = response()->json($prova, 200);
    return $res;
  }

  public function studentsAbsence() {
    $data = auth()->user()->subjects()->get();
    $registerContainer = array();
    $registerStudent = array();
    foreach ($data as $value) {
      $details = DB::table('students_subjects')->where('sub_id', $value->id)->get();
      array_push($registerContainer, $details);
    }
    for ($i=0; $i<count($registerContainer); $i++) {
      for ($k=0; $k<count($registerContainer[$i]); $k++) {
        array_push($registerStudent, $registerContainer[$i][$k]);
      }
    }
    $final = ['student_absence' => $registerStudent];
    return response()->json($final, 200);
  }

  public function studentsMark() {
    $data = auth()->user()->subjects()->get();
    $registerContainer = array();
    $registerStudent = array();
    foreach ($data as $value) {
      $details = DB::table('students_marks')->where('sub_id', $value->id)->get();
      array_push($registerContainer, $details);
    }
    for ($i=0; $i<count($registerContainer); $i++) {
      for ($k=0; $k<count($registerContainer[$i]); $k++) {
        array_push($registerStudent, $registerContainer[$i][$k]);
      }
    }
    $final = ['student_marks' => $registerStudent];
    return response()->json($final, 200);
  }

  public function postReminder(Request $request) {

    $request->validate([
      'memoryText' => 'required|string'

    ]);

    $reminder = new \App\Memory([
      'memoryText' => $request->memoryText,
      'user_id' => auth()->user()->id
    ]);

    $reminder->save();

    return response()->json([
      'memories' => $reminder
    ], 201);

  }

  public function postAbsence(Request $request) {

    $request->validate([
      'sub_id' => 'required|integer',
      'stud_id' => 'required|integer',
      'absence_hours' => 'required|integer',
    ]);

    $absenceSub = DB::table('students_subjects')
              ->where('sub_id', $request->sub_id)->exists();
    $absenceStud = DB::table('students_subjects')
                  ->where('stud_id', $request->stud_id)->exists();
    if ($absenceStud == false) {
      $absence = DB::table('students_subjects')
      ->where('id', '[0-9]+')
      ->updateOrInsert([
        'stud_id' => $request->stud_id,
        'sub_id' => $request->sub_id,
        'absence_hours' => $request->absence_hours,
        'date' => Carbon::now()->format('Y-m-d')
      ]);

    }
    elseif ($absenceStud == true && $absenceSub == false) {
      $absence = DB::table('students_subjects')
      ->where('id', '[0-9]+')
      ->updateOrInsert([
        'stud_id' => $request->stud_id,
        'sub_id' => $request->sub_id,
        'absence_hours' => $request->absence_hours,
        'date' => Carbon::now()->format('Y-m-d')
      ]);

    }

    elseif ($absenceStud == true && $absenceSub == true) {
      $absence = DB::table('students_subjects')
      ->where('stud_id', $request->stud_id)
      ->where('sub_id', $request->sub_id)
      ->increment('absence_hours', $request->absence_hours);

    }

    return response()->json([
      'absence' => 'assenza salvata'
    ], 201);

  }

  public function postArgument(Request $request) {

    $request->validate([
      'topic' => 'required|string',
      'sub_id' => 'required|integer'

    ]);

    $argument = new \App\Argument([
      'topic' => $request->topic,
      'sub_id' => $request->sub_id
    ]);

    $argument->save();

    return response()->json([
      'arguments' => 'argoemnto salvato'
    ], 201);

  }

  public function getReminder() {
    $dataReminder = auth()->user()->memories()->get();


    return response()->json(['memo' => $dataReminder], 200);

  }

}
