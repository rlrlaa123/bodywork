<?php

namespace App\Http\Controllers\Admin;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderby('number')->paginate(10);

        return view('admin.Branch.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required|integer|unique:branches',
            'name' => 'required',
            'description' => 'required|min:6',
            'time1' => 'required',
            'time2' => 'required',
            'phone' => 'required',
            'location' => 'required',
        ]);

        $validator->after(function () {});

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $branch_list = [null, null, null, null, null, null, null, null];

        for ($i = 1; $i <= 8; $i++) {
            if ($request->hasFile('image' . $i)) {
                if (!file_exists('storage')) {
                    File::makeDirectory('storage');
                    if (!file_exists('storage/branches')) {
                        File::makeDirectory('storage/branches');
                        if (
                            !file_exists('storage/branches' . $request->number)
                        ) {
                            File::makeDirectory(
                                'storage/branches/' . $request->number
                            );
                        }
                    }
                }

                $branch = $request->file('image' . $i);
                $branch_name =
                    'branch' .
                    $i .
                    time() .
                    '.' .
                    $branch->getClientOriginalExtension();
                $destinationPath_branch = public_path(
                    'storage/branches/' . $request->number
                );
                $branch->move($destinationPath_branch, $branch_name);

                $branch_list[$i - 1] = $branch_name;
            }
        }

        $branch = new Branch();

        $branch->number = $request->number;
        $branch->name = $request->name;
        $branch->description = $request->description;
        $branch->time1 = $request->time1;
        $branch->time2 = $request->time2;
        $branch->location = $request->location;
        $branch->phone = $request->phone;

        if ($request->has('time3')) {
            $branch->time3 = $request->time3;
        }

        if ($request->has('note')) {
            $branch->note = $request->note;
        }

        for ($i = 1; $i <= 8; $i++) {
            if ($request->has('image' . $i)) {
                $branch['image' . $i] =
                    'storage/branches/' .
                    $request->number .
                    '/' .
                    $branch_list[$i - 1];
            }
        }

        $branch->save();

        return redirect('admin/branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);

        return view('admin.Branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch_list = [null, null, null, null, null, null, null, null];

        for ($i = 1; $i <= 8; $i++) {
            if ($request->hasFile('image' . $i)) {
                $branch = Branch::find($id);

                if ($branch['image' . $i] != null) {
                    File::delete($branch['image' . $i]);
                }

                $branch = $request->file('image' . $i);
                $branch_name =
                    'branch' .
                    $i .
                    time() .
                    '.' .
                    $branch->getClientOriginalExtension();
                $destinationPath_branch = public_path(
                    'storage/branches/' . $request->number . '/'
                );
                $branch->move($destinationPath_branch, $branch_name);

                $branch_list[$i - 1] = $branch_name;
                chmod($destinationPath_branch . $branch_name, 0775);
            }
        }

        Branch::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'time1' => $request->time1,
            'location' => $request->location,
            'phone' => $request->phone,
        ]);

        if ($request->has('time3')) {
            Branch::where('id', $id)->update([
                'time3' => $request->time3,
            ]);
        }

        if ($request->has('note')) {
            Branch::where('id', $id)->update([
                'note' => $request->note,
            ]);
        }

        for ($i = 1; $i <= 8; $i++) {
            if ($request->has('image' . $i)) {
                Branch::where('id', $id)->update([
                    'image' . $i =>
                        'storage/branches/' .
                        $request->number .
                        '/' .
                        $branch_list[$i - 1],
                ]);
            }
        }

        return redirect('admin/branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);

        File::delete($branch->image);

        $branch->delete();

        return response('success', 200);
    }
}
