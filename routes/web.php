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
    return view('home');
});
Route::get('/volunteer', function () {
    return view('volunteer');
});
Route::get('/donors', function () {
    return view('donors');
});
Route::get('/donations', function () {
    return view('donations');
});

Route::get('/affected', function () {
    return view('affected');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/becomedonor', function () {
    return view('becomedonor');
});
Route::get('/sms', function () {
    return view('sms');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/donate', function () {
    return view('donate');
});


Route::post('donate','donorcontroller@insert');

Route::post('request','requestcontroller@insert');

Route::get('affected','affectedviewcontroller@index');

Route::get('donors','donorviewcontroller@index');

Route::get('donations','donationcontroller@index');

Route::get('sms','smscontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
