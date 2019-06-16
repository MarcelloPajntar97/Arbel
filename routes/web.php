<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::resource('/home', 'SecretaryController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/routes/admin', 'HomeController@index');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::resource('/editUser', 'SecretaryController');
Route::resource('/studentDetail', 'StudentDetailController');
Route::get('subjects/get/{id}', 'SecretaryEditData@getSubjects');
Route::resource('/studentslist', 'StudentListController');
Route::post('/home/send', "HomeController@send");
Route::get('/studentslist/{id}/edit/{sub_id}', 'StudentListController@editCustom');
Route::get('/studentDetail/{id}/course/{sub_id}', 'StudentDetailController@editDetail');
Route::resource('/calendar', 'CalendarController');
// Route::get('/editUser', 'SecretaryController@put');
//Route::resource('/editUser', 'CalendarController');
