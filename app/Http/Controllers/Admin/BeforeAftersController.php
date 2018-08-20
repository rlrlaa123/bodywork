<?php

namespace App\Http\Controllers\Admin;

use App\BeforeAfter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;

class BeforeAftersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bfs = BeforeAfter::orderby('created_at', 'desc')->paginate(5);

        return view('admin.BeforeAfter.index', compact('bfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.BeforeAfter.create');
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
            'image' => 'required',
        ]);

        $validator->after(function () {
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if(!file_exists('storage/beforeafters')) {
                    File::makeDirectory('storage/beforeafters');
                }
            }

            $bf = $request->file('image');
            $bf_name = 'bf' . time() . '.' . $bf->getClientOriginalExtension();
            $destinationPath_bf = public_path('storage/beforeafters/');
            $bf->move($destinationPath_bf, $bf_name);
        }

        $bf = new BeforeAfter;

        if($request->has('image')) {
            $bf->image = 'storage/beforeafters/' . $bf_name;
        }

        $bf->link = $request->link;

        $bf->save();

        return redirect('admin/beforeafter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bf = BeforeAfter::find($id);

        return view('admin.BeforeAfter.edit', compact('bf'));
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
        if ($request->hasFile('image')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if(!file_exists('storage/beforeafters')) {
                    File::makeDirectory('storage/beforeafters');
                }
            }
            $bf = BeforeAfter::find($id);

            if($bf->image != null) {
                File::delete($bf->image);
            }

            $bf = $request->file('image');
            $bf_name = 'bf' . time() . '.' . $bf->getClientOriginalExtension();
            $destinationPath_bf = public_path('storage/beforeafters/');
            $bf->move($destinationPath_bf, $bf_name);
        }

        if($request->has('image')) {
            BeforeAfter::where('id', $id)->update([
                'image' => 'storage/beforeafters/' . $bf_name,
            ]);
        }

        BeforeAfter::where('id', $id)->update([
            'link' => $request->link,
        ]);

        return redirect('admin/beforeafter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bf = BeforeAfter::find($id);

        File::delete($bf->image);

        $bf->delete();

        return response('success', 200);
    }
}
