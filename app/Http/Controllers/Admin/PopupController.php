<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Popup;
use Validator;

class PopupController extends Controller
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
        $popups = Popup::orderby('created_at', 'desc')->paginate(10);

        return view('admin.Popup.index', compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Popup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'top' => 'integer',
            'left' => 'integer',
            'width' => 'integer',
            'height' => 'integer',
        ]);

        $validator->after(function () {});

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if (!file_exists('storage/popup')) {
                    File::makeDirectory('storage/popups');
                }
            }

            $popup = $request->file('image');
            $popup_name =
                'popup' . time() . '.' . $popup->getClientOriginalExtension();
            $destinationPath_popup = public_path('storage/popups/');
            $popup->move($destinationPath_popup, $popup_name);
            chmod($destinationPath_popup . $popup_name, 0775);
        }

        $popup = new popup();

        $popup->title = $request->title;
        $popup->checked = $request->checked != null ? true : false;

        if ($request->has('image')) {
            $popup->image = 'storage/popups/' . $popup_name;
        }

        $popup->save();

        return redirect('admin/popup');
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
        $popup = Popup::find($id);

        return view('admin.Popup.edit', compact('popup'));
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
        $validator = Validator::make($request->all(), [
            'top' => 'integer',
            'left' => 'integer',
            'width' => 'integer',
            'height' => 'integer',
        ]);

        $validator->after(function () {});

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            if (!file_exists('storage')) {
                File::makeDirectory('storage');
                if (!file_exists('storage/popups')) {
                    File::makeDirectory('storage/popups');
                }
            }
            $popup = Popup::find($id);

            if ($popup->image != null) {
                File::delete($popup->image);
            }

            $popup = $request->file('image');
            $popup_name =
                'popup' . time() . '.' . $popup->getClientOriginalExtension();
            $destinationPath_popup = public_path('storage/popups/');
            $popup->move($destinationPath_popup, $popup_name);
            chmod($destinationPath_popup . $popup_name, 0775);
        }

        Popup::where('id', $id)->update([
            'title' => $request->title,
            'top' => $request->top,
            'left' => $request->left,
            'width' => $request->width,
            'height' => $request->height,
            'checked' => $request->checked != null ? true : false,
        ]);

        if ($request->has('image')) {
            Popup::where('id', $id)->update([
                'image' => 'storage/popups/' . $popup_name,
            ]);
        }

        return redirect('admin/popup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup = Popup::find($id);

        File::delete($popup->image);

        $popup->delete();

        return response('success', 200);
    }

    public function checkedChange(Request $request, $id)
    {
        $popup = Popup::find($id);

        $popup->checked = $request->checked != null ? true : false;

        $popup->save();

        return redirect('admin/popup');
    }
}
