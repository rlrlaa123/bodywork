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

Route::get('/ptprogram/1', function() {
    return view('PT_Program.pt');
});

Route::get('/ptprogram/2', function() {
    return view('PT_Program.pt_progress');
});

Route::get('/ptprogram/3', function() {
    return view('PT_Program.pt_program');
});

Route::get('/bodywork/1', function() {
    return view('BodyWork.ceo');
});

Route::get('/bodywork/2', function() {
    return view('BodyWork.bodywork');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::get('/admin', function() {
        return view('admin.home');
    });
});

Route::get('/branch/1', function() {
    return view('Branch.branch');
});

Route::get('/branch/2', function() {
    return view('Branch.trainer');
});

Route::get('/bodychallenger/1', function() {
    return view('BodyChallenger.bodychallenger');
});

Route::get('/bodychallenger/2', function() {
    return view('BodyChallenger.beforeafter');
});