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

Route::get('/error', function() {
    return view('CustomerCenter.error');
});

Route::resource('/notice', 'NoticesController');

Route::resource('/event', 'EventsController');

Route::get('lesson', 'LessonsController@index')->name('lesson.index');
Route::get('lesson/create', 'LessonsController@create')->name('lesson.create');
Route::post('lesson', 'LessonsController@store')->name('lesson.store');
Route::get('lesson/{lesson}', 'LessonsController@show')->name('lesson.show');
Route::get('lesson/{lesson}/edit', 'LessonsController@edit')->name('lesson.edit');
Route::put('lesson/{lesson}', 'LessonsController@update')->name('lesson.update');
Route::delete('lesson/{lesson}', 'LessonsController@destroy')->name('lesson.destroy');

Route::get('/lesson/{lesson}/lock', 'LessonsController@lock')->name('lesson.lock');
Route::post('/lesson/{lesson}/lock', 'LessonsController@lockOpen')->name('lesson.lock.open');

Route::get('freelesson', 'FreeLessonsController@index')->name('freelesson.index');
Route::get('freelesson/create', 'FreeLessonsController@create')->name('freelesson.create');
Route::post('freelesson', 'FreeLessonsController@store')->name('freelesson.store');
Route::get('freelesson/{freelesson}', 'FreeLessonsController@show')->name('freelesson.show');
Route::get('freelesson/{freelesson}/edit', 'FreeLessonsController@edit')->name('freelesson.edit');
Route::put('freelesson/{freelesson}', 'FreeLessonsController@update')->name('freelesson.update');
Route::delete('freelesson/{freelesson}', 'FreeLessonsController@destroy')->name('freelesson.destroy');

Route::get('/freelesson/{freelesson}/lock', 'FreeLessonsController@lock')->name('freelesson.lock');
Route::post('/freelesson/{freelesson}/lock', 'FreeLessonsController@lockOpen')->name('freelesson.lock.open');

Route::prefix('admin')->group(function() {
    Route::get('notice', 'Admin\NoticesController@index')->name('admin.notice.index');
    Route::get('notice/create', 'Admin\NoticesController@create')->name('admin.notice.create');
    Route::post('notice', 'Admin\NoticesController@store')->name('admin.notice.store');
    Route::get('notice/{notice}', 'Admin\NoticesController@show')->name('admin.notice.show');
    Route::get('notice/{notice}/edit', 'Admin\NoticesController@edit')->name('admin.notice.edit');
    Route::put('notice/{notice}', 'Admin\NoticesController@update')->name('admin.notice.update');
    Route::delete('notice/{notice}', 'Admin\NoticesController@destroy')->name('admin.notice.destroy');

    Route::get('event', 'Admin\EventsController@index')->name('admin.event.index');
    Route::get('event/create', 'Admin\EventsController@create')->name('admin.event.create');
    Route::post('event', 'Admin\EventsController@store')->name('admin.event.store');
    Route::get('event/{event}', 'Admin\EventsController@show')->name('admin.event.show');
    Route::get('event/{event}/edit', 'Admin\EventsController@edit')->name('admin.event.edit');
    Route::put('event/{event}', 'Admin\EventsController@update')->name('admin.event.update');
    Route::delete('event/{event}', 'Admin\EventsController@destroy')->name('admin.event.destroy');

    Route::get('lesson', 'Admin\LessonsController@index')->name('admin.lesson.index');
    Route::get('lesson/create', 'Admin\LessonsController@create')->name('admin.lesson.create');
    Route::post('lesson', 'Admin\LessonsController@store')->name('admin.lesson.store');
    Route::get('lesson/{lesson}', 'Admin\LessonsController@show')->name('admin.lesson.show');
    Route::get('lesson/{lesson}/edit', 'Admin\LessonsController@edit')->name('admin.lesson.edit');
    Route::put('lesson/{lesson}', 'Admin\LessonsController@update')->name('admin.lesson.update');
    Route::delete('lesson/{lesson}', 'Admin\LessonsController@destroy')->name('admin.lesson.destroy');

    Route::get('freelesson', 'Admin\FreeLessonsController@index')->name('admin.freelesson.index');
    Route::get('freelesson/create', 'Admin\FreeLessonsController@create')->name('admin.freelesson.create');
    Route::post('freelesson', 'Admin\FreeLessonsController@store')->name('admin.freelesson.store');
    Route::get('freelesson/{freelesson}', 'Admin\FreeLessonsController@show')->name('admin.freelesson.show');
    Route::get('freelesson/{freelesson}/edit', 'Admin\FreeLessonsController@edit')->name('admin.freelesson.edit');
    Route::put('freelesson/{freelesson}', 'Admin\FreeLessonsController@update')->name('admin.freelesson.update');
    Route::delete('freelesson/{freelesson}', 'Admin\FreeLessonsController@destroy')->name('admin.freelesson.destroy');
});