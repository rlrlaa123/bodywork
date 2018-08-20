<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('admin.Password.edit');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'password_new' => 'required',
            'password_new_confirmation' => 'required',
        ]);

        $validator->after(function () use ($request, $validator) {
            if (!Hash::check($request->password, auth()->user()->password)) {
                $validator->errors()->add('password', '현재 비밀번호가 맞지 않습니다.');
            }
            if ($request->password_new != $request->password_new_confirmation) {
                $validator->errors()->add('password_new', '새 비밀번호가 일치하지 않습니다.');
            }
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();

        $user->password = Hash::make($request->password_new);

        $user->save();

        return redirect('/admin');
    }
}
