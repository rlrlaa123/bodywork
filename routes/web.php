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
});
//
//Route::get('/notice/2', function() {
//    return view('CustomerCenter.Event.index');
//});
//
//Route::get('/notice/3', function() {
//    return view('CustomerCenter.Lesson.index');
//});
//
//Route::get('/notice/4', function() {
//    return view('CustomerCenter.FreeLesson.index');
//});
//
//Route::get('/notice/5', function() {
//    return view('CustomerCenter.Consult.index');
//});