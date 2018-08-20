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
    $home = \App\HomeImage::first();

    return view('home', compact('home'));
});

Route::get('/admin/password', 'Admin\PasswordController@edit');
Route::put('/admin/password', 'Admin\PasswordController@update');

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

Route::get('/bodywork/3', function() {
    $alliances = \App\Alliance::orderby('created_at', 'desc')->paginate(6);

    return view('BodyWork.alliance', compact('alliances'));
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/admin', function() {
        $home = \App\HomeImage::first();

        return view('admin.HomeImage.index', compact('home'));
    });

    Route::get('/admin/edit', function() {
        $home = \App\HomeImage::first();

        return view('admin.HomeImage.edit', compact('home'));
    });

    Route::put('/admin/update/{home}', function(\Illuminate\Http\Request $request, $id) {
        $home_list = [
            null, null, null
        ];

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile('home' . $i)) {

                if (!file_exists('storage')) {
                    \Illuminate\Support\Facades\File::makeDirectory('storage');
                    if (!file_exists('storage/home')) {
                        \Illuminate\Support\Facades\File::makeDirectory('storage/home');
                    }
                }

                $home = \App\HomeImage::first();

                if ($home['home' . $i] != null) {
                    \Illuminate\Support\Facades\File::delete($home['home' . $i]);
                }

                $home = $request->file('home' . $i);
                $home_name = 'home' . $i . '.' . $home->getClientOriginalExtension();
                $destinationPath_home = public_path('storage/home/');
                $home->move($destinationPath_home, $home_name);

                $home_list[$i - 1] = $home_name;
            }
        }


        $bf_list = [
            null, null, null, null, null, null, null, null, null
        ];

        for ($i = 1; $i <= 9; $i++) {
            if ($request->hasFile('bf' . $i)) {

                if (!file_exists('storage')) {
                    \Illuminate\Support\Facades\File::makeDirectory('storage');
                    if (!file_exists('storage/home')) {
                        \Illuminate\Support\Facades\File::makeDirectory('storage/home');
                    }
                }

                $home = \App\HomeImage::first();

                if ($home['bf' . $i] != null) {
                    \Illuminate\Support\Facades\File::delete($home['bf' . $i]);
                }

                $home = $request->file('bf' . $i);
                $home_name = 'bf' . $i . '.' . $home->getClientOriginalExtension();
                $destinationPath_home = public_path('storage/home/');
                $home->move($destinationPath_home, $home_name);

                $bf_list[$i - 1] = $home_name;
            }
        }

        \App\HomeImage::first()->update([
            'link1' => $request->link1,
            'link2' => $request->link2,
            'link3' => $request->link3,
        ]);

        \App\HomeImage::first()->update([
            'bf1_link' => $request->bf1_link,
            'bf2_link' => $request->bf2_link,
            'bf3_link' => $request->bf3_link,
            'bf4_link' => $request->bf4_link,
            'bf5_link' => $request->bf5_link,
            'bf6_link' => $request->bf6_link,
            'bf7_link' => $request->bf7_link,
            'bf8_link' => $request->bf8_link,
            'bf9_link' => $request->bf9_link,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            if ($request->has('home' . $i)) {
                \App\HomeImage::where('id', $id)->update([
                    'home' . $i => 'storage/home/'. $home_list[$i - 1],
                ]);
            }
        }

        for ($i = 1; $i <= 9; $i++) {
            if ($request->has('bf' . $i)) {
                \App\HomeImage::where('id', $id)->update([
                    'bf' . $i => 'storage/home/'. $bf_list[$i - 1],
                ]);
            }
            if ($request->has('bf' . $i . '_link')) {
                \App\HomeImage::where('id', $id)->update([
                    'bf' . $i . '_link' => $request['bf' . $i . '_link'],
                ]);
            }
        }

        return redirect('admin');
    });
});

Route::get('/branch/1/{branch}', function($id) {
    $branch = \App\Branch::find($id);
    $branches = \App\Branch::all();

    return view('Branch.branch', compact('branch', 'branches'));
});

Route::get('/branch/2/{branch}', function($id) {
    $trainers = \App\Trainer::where('branch_id', $id)->get();
    $branches = \App\Branch::all();

    return view('Branch.trainer', compact('trainers', 'branches'));
});

Route::get('/bodychallenger/1', function() {
    return view('BodyChallenger.bodychallenger');
});

Route::get('/bodychallenger/2', function() {
    $bfs = \App\BeforeAfter::orderby('created_at', 'desc')->paginate(6);

    return view('BodyChallenger.beforeafter', compact('bfs'));
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
    Route::get('branch', 'Admin\BranchesController@index')->name('admin.branch.index');
    Route::get('branch/create', 'Admin\BranchesController@create')->name('admin.branch.create');
    Route::post('branch', 'Admin\BranchesController@store')->name('admin.branch.store');
    Route::get('branch/{branch}', 'Admin\BranchesController@show')->name('admin.branch.show');
    Route::get('branch/{branch}/edit', 'Admin\BranchesController@edit')->name('admin.branch.edit');
    Route::put('branch/{branch}', 'Admin\BranchesController@update')->name('admin.branch.update');
    Route::delete('branch/{branch}', 'Admin\BranchesController@destroy')->name('admin.branch.destroy');

    Route::get('trainer', 'Admin\TrainersController@index')->name('admin.trainer.index');
    Route::get('trainer/create', 'Admin\TrainersController@create')->name('admin.trainer.create');
    Route::post('trainer', 'Admin\TrainersController@store')->name('admin.trainer.store');
    Route::get('trainer/{trainer}', 'Admin\TrainersController@show')->name('admin.trainer.show');
    Route::get('trainer/{trainer}/edit', 'Admin\TrainersController@edit')->name('admin.trainer.edit');
    Route::put('trainer/{trainer}', 'Admin\TrainersController@update')->name('admin.trainer.update');
    Route::delete('trainer/{trainer}', 'Admin\TrainersController@destroy')->name('admin.trainer.destroy');

    Route::get('beforeafter', 'Admin\BeforeAftersController@index')->name('admin.beforeafter.index');
    Route::get('beforeafter/create', 'Admin\BeforeAftersController@create')->name('admin.beforeafter.create');
    Route::post('beforeafter', 'Admin\BeforeAftersController@store')->name('admin.beforeafter.store');
    Route::get('beforeafter/{beforeafter}', 'Admin\BeforeAftersController@show')->name('admin.beforeafter.show');
    Route::get('beforeafter/{beforeafter}/edit', 'Admin\BeforeAftersController@edit')->name('admin.beforeafter.edit');
    Route::put('beforeafter/{beforeafter}', 'Admin\BeforeAftersController@update')->name('admin.beforeafter.update');
    Route::delete('beforeafter/{beforeafter}', 'Admin\BeforeAftersController@destroy')->name('admin.beforeafter.destroy');

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

    Route::get('alliance', 'Admin\AlliancesController@index')->name('admin.alliance.index');
    Route::get('alliance/create', 'Admin\AlliancesController@create')->name('admin.alliance.create');
    Route::post('alliance', 'Admin\AlliancesController@store')->name('admin.alliance.store');
    Route::get('alliance/{alliance}', 'Admin\AlliancesController@show')->name('admin.alliance.show');
    Route::get('alliance/{alliance}/edit', 'Admin\AlliancesController@edit')->name('admin.alliance.edit');
    Route::put('alliance/{alliance}', 'Admin\AlliancesController@update')->name('admin.alliance.update');
    Route::delete('alliance/{alliance}', 'Admin\AlliancesController@destroy')->name('admin.alliance.destroy');
});