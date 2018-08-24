<?php

namespace App\Http\Controllers\Admin;

use App\Alliance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;

class AlliancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alliances = Alliance::orderby('created_at', 'desc')->paginate(5);

        return view('admin.Alliance.index', compact('alliances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Alliance.create');
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
            'description' => 'required',
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
                if(!file_exists('storage/alliances')) {
                    File::makeDirectory('storage/alliances');
                }
            }

            $alliance = $request->file('image');
            $alliance_name = 'alliance' . time() . '.' . $alliance->getClientOriginalExtension();
            $destinationPath_alliance = public_path('storage/alliances/');
            $alliance->move($destinationPath_alliance, $alliance_name);
        }

        $alliance = new Alliance;

        $alliance->description = $request->description;
        $alliance->link = $request->link;

        if($request->has('image')) {
            $alliance->image = 'storage/alliances/' . $alliance_name;
        }

        $alliance->save();

        return redirect('admin/alliance');
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
        $alliance = Alliance::find($id);

        return view('admin.Alliance.edit', compact('alliance'));
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
                if(!file_exists('storage/alliances')) {
                    File::makeDirectory('storage/alliances');
                }
            }
            $alliance = Alliance::find($id);

            if($alliance->image != null) {
                File::delete($alliance->image);
            }

            $alliance = $request->file('image');
            $alliance_name = 'alliance' . time() . '.' . $alliance->getClientOriginalExtension();
            $destinationPath_alliance = public_path('storage/alliances/');
            $alliance->move($destinationPath_alliance, $alliance_name);
        }

        Alliance::where('id', $id)->update([
            'description' => $request->description,
            'link' => $request->link,
        ]);

        if($request->has('image')) {
            Alliance::where('id', $id)->update([
                'image' => 'storage/alliances/' . $alliance_name,
            ]);
        }

        return redirect('admin/alliance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alliance = Alliance::find($id);

        File::delete($alliance->image);

        $alliance->delete();

        return response('success', 200);
    }
}
