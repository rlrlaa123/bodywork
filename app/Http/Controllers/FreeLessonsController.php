<?php

namespace App\Http\Controllers;

use App\FreeLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class FreeLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelessons = FreeLesson::orderby('created_at', 'desc')->paginate(10);

        return view('CustomerCenter.FreeLesson.index', compact('freelessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CustomerCenter.FreeLesson.create');
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

        $freelesson = new FreeLesson;

        $freelesson->name = $request->name;
        $freelesson->email = $request->email;
        $freelesson->password = Hash::make($request->password);
        $freelesson->title = $request->title;
        $freelesson->contents = $request->contents;

        $freelesson->save();

        return redirect('/freelesson');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $freelesson = FreeLesson::find($id);

        $password =  $request->session()->get('password');

        if (Hash::check($password, $freelesson->password)) {
            $freelesson->view = $freelesson->view + 1;

            $freelesson->save();

            return view('CustomerCenter.FreeLesson.show', compact('freelesson'));
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
        $freelesson = FreeLesson::find($id);

        return view('CustomerCenter.FreeLesson.lock', compact('freelesson'));
    }

    public function lockOpen(Request $request, $id)
    {
        $freelesson = FreeLesson::find($id);

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
        ]);

        $validator->after(function () use ($id ,$request, $validator, $freelesson) {

            if (!Hash::check($request->password, $freelesson->password)) {
                $validator->errors()->add('password', '비밀번호가 맞지 않습니다.');
            }
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $request->session()->flash('password', $request->password);

        return redirect(route('freelesson.show', $id));
    }
}
