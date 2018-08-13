<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Validator;


class EventsController extends Controller
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
        $events = Event::orderby('created_at', 'asc')->paginate(10);

        return view('admin.Event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
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
                if(!file_exists('storage/events')) {
                    File::makeDirectory('storage/events');
                }
            }

            $event = $request->file('image');
            $event_name = 'event' . time() . '.' . $event->getClientOriginalExtension();
            $destinationPath_event = public_path('storage/events/');
            $event->move($destinationPath_event, $event_name);
        }

        $event = new Event;

        $event->title = $request->title;
        $event->contents = $request->contents;

        if($request->has('image')) {
            $event->image = 'storage/events/' . $event_name;
        }

        $event->save();

        return redirect('admin/event');
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
        $event = Event::find($id);

        return view('admin.Event.edit', compact('event'));
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
                if(!file_exists('storage/events')) {
                    File::makeDirectory('storage/events');
                }
            }
            $event = Event::find($id);

            if($event->image != null) {
                File::delete($event->image);
            }

            $event = $request->file('image');
            $event_name = 'event' . time() . '.' . $event->getClientOriginalExtension();
            $destinationPath_event = public_path('storage/events/');
            $event->move($destinationPath_event, $event_name);
        }

        Event::where('id', $id)->update([
            'title' => $request->title,
            'contents' => $request->contents,
        ]);

        if($request->has('image')) {
            Event::where('id', $id)->update([
                'image' => 'storage/events/' . $event_name,
            ]);
        }

        return redirect('admin/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        File::delete($event->image);

        $event->delete();

        return response('success', 200);
    }
}
