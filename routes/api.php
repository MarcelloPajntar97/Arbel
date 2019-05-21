<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

Route::resource('/users', 'UserApiController');
Route::resource('/subjects', 'SubjectApiController');
Route::resource('/courses', 'CourseApiController');
// Route::resource('/students', 'StudentApiController');
Route::post('login', 'UserLogController@login');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserLogController@details');
Route::get('user', 'UserLogController@studentsList');
Route::post('postReminder', 'UserLogController@postReminder');
Route::get('getReminder', 'UserLogController@getReminder');

});
