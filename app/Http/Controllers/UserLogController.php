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

    foreach ($data as $student) {
      foreach ($student->class()->get() as $course) {

        $students = Student::where('class_id', $course->id)->get();
        array_push($dataStudent, $students);
      }
    }

    return response()->json(['students' => $dataStudent], 200);
  }
}
