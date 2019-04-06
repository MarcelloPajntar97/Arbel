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

 Route::get('/nav', function () {
     return view('elements/nav');
 });
Route::resource('/home', 'SecretaryController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/calendar', 'CalendarController@index');
Route::get('/routes/admin', 'HomeController@index');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
