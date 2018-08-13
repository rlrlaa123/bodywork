<?php

namespace App\Http\Controllers\Admin;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;


class NoticesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderby('created_at', 'asc')->paginate(10);

        return view('admin.Notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Notice.create');
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

        if ($request->hasFile('image')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if(!file_exists('storage/notices')) {
                    File::makeDirectory('storage/notices');
                }
            }

            $notice = $request->file('image');
            $notice_name = 'notice' . time() . '.' . $notice->getClientOriginalExtension();
            $destinationPath_notice = public_path('storage/notices/');
            $notice->move($destinationPath_notice, $notice_name);
        }

        $notice = new Notice;

        $notice->title = $request->title;
        $notice->contents = $request->contents;

        if($request->has('image')) {
            $notice->image = 'storage/notices/' . $notice_name;
        }

        $notice->save();

        return redirect('admin/notice');
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
        $notice = Notice::find($id);

        return view('admin.Notice.edit', compact('notice'));
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
                if(!file_exists('storage/notices')) {
                    File::makeDirectory('storage/notices');
                }
            }
            $notice = Notice::find($id);

            if($notice->image != null) {
                File::delete($notice->image);
            }

            $notice = $request->file('image');
            $notice_name = 'notice' . time() . '.' . $notice->getClientOriginalExtension();
            $destinationPath_notice = public_path('storage/notices/');
            $notice->move($destinationPath_notice, $notice_name);
        }

        Notice::where('id', $id)->update([
            'title' => $request->title,
            'contents' => $request->contents,
        ]);

        if($request->has('image')) {
            Notice::where('id', $id)->update([
                'image' => 'storage/notices/' . $notice_name,
            ]);
        }

        return redirect('admin/notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

        File::delete($notice->image);

        $notice->delete();

        return response('success', 200);
    }
}
