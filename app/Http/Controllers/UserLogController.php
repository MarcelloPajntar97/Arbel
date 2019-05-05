<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Subject;
use App\ClassModel;

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
          $subjects = auth()->user()->subjects()->with('class')->get();
          $success['token'] =  $user->createToken('MyApp')-> accessToken;
          $success['id'] =  $user->id;
          $success['name'] =  $user->name;
          $success['surname'] =  $user->surname;
          $success['email'] =  $user->email;
          $success['dataDetails'] =  $subjects;
          return response()->json(['success' => $success], $this-> successStatus);
      }
      else {
          return response()->json(['error'=>'Unauthorised'], 401);
      }
  }
}
