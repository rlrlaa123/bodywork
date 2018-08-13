<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::orderby('created_at', 'desc')->paginate(10);

        return view('CustomerCenter.Lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CustomerCenter.Lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'title' => 'required',
            'contents' => 'required',
        ]);

        $validator->after(function () {
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $lesson = new Lesson;

        $lesson->name = $request->name;
        $lesson->email = $request->email;
        $lesson->password = Hash::make($request->password);
        $lesson->title = $request->title;
        $lesson->contents = $request->contents;

        $lesson->save();

        return redirect('/lesson');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $lesson = Lesson::find($id);

        $password =  $request->session()->get('password');

        if (Hash::check($password, $lesson->password)) {
            $lesson->view = $lesson->view + 1;

            $lesson->save();

            return view('CustomerCenter.Lesson.show', compact('lesson'));
        }
        else {
            return view('CustomerCenter.error');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function lock($id)
    {
        $lesson = Lesson::find($id);

        return view('CustomerCenter.Lesson.lock', compact('lesson'));
    }

    public function lockOpen(Request $request, $id)
    {
        $lesson = Lesson::find($id);

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
        ]);

        $validator->after(function () use ($id ,$request, $validator, $lesson) {

            if (!Hash::check($request->password, $lesson->password)) {
                $validator->errors()->add('password', '비밀번호가 맞지 않습니다.');
            }
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $request->session()->flash('password', $request->password);

        return redirect(route('lesson.show', $id));
    }
}
