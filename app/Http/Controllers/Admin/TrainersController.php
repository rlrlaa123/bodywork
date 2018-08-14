<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::orderby('name')->paginate(6);

        return view('admin.Trainer.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::all();

        return view('admin.Trainer.create', compact('branches'));
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
            'description' => 'required',
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
                if(!file_exists('storage/trainers')) {
                    File::makeDirectory('storage/trainers');
                }
            }

            $trainer = $request->file('image');
            $trainer_name = 'trainer' . time() . '.' . $trainer->getClientOriginalExtension();
            $destinationPath_trainer = public_path('storage/trainers/');
            $trainer->move($destinationPath_trainer, $trainer_name);
        }

        $trainer = new Trainer;

        $trainer->branch_id = Branch::find($request->branch)->id;
        $trainer->name = $request->name;
        $trainer->description = $request->description;

        if($request->has('image')) {
            $trainer->image = 'storage/trainers/' . $trainer_name;
        }

        $trainer->save();

        return redirect('admin/trainer');
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
        $trainer = Trainer::find($id);

        $branches = Branch::all();

        return view('admin.Trainer.edit', compact('trainer', 'branches'));
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
                if(!file_exists('storage/trainers')) {
                    File::makeDirectory('storage/trainers');
                }
            }
            $trainer = Trainer::find($id);

            if($trainer->image != null) {
                File::delete($trainer->image);
            }

            $trainer = $request->file('image');
            $trainer_name = 'trainer' . time() . '.' . $trainer->getClientOriginalExtension();
            $destinationPath_trainer = public_path('storage/trainers/');
            $trainer->move($destinationPath_trainer, $trainer_name);
        }

        Trainer::where('id', $id)->update([
            'branch_id' => Branch::find($request->branch)->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->has('image')) {
            Trainer::where('id', $id)->update([
                'image' => 'storage/trainers/' . $trainer_name,
            ]);
        }

        return redirect('admin/trainer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);

        File::delete($trainer->image);

        $trainer->delete();

        return response('success', 200);
    }
}
