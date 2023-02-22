<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function admin()
    {
        $events = Event::all();
        return view('events.admin')
            ->with('events', $events);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->paginate(6);
        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event_categories = EventCategory::orderBy('title')->get();
        return view('events.create')
            ->with('event_categories', $event_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event($request->all());
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/events');
            $event->cover = basename($path);
        }
        $event->event_category()->associate($request->event_category);
        $event->save();

        return redirect()->route('events.admin')
            ->with('success', 'رویداد جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show')
            ->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $event_categories = EventCategory::orderBy('title')->get();
        return view('events.edit')
            ->with('event', $event)
            ->with('event_categories', $event_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        if ($request->hasFile('cover')) {
            $fileName = $event->cover;
            if (Storage::exists('public/events/' . $fileName)) {
                Storage::delete('public/events/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['events/test.png', 'events/test2.png']);
                */
            }
            $path = $request->cover->store('public/events');
            $event->cover = basename($path);
        }
        $event->fill($request->only(['full_name', 'date', 'day', 'hour', 'location', 'title', 'description', 'start', 'end'])); // 'cover' nadashte bashe
        $event->event_category()->associate($request->event_category);
        $event->save();

        return redirect()->route('events.admin')
            ->with('success', 'رویداد ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $fileName = $event->cover;
        if (Storage::exists('public/events/' . $fileName)) {
            Storage::delete('public/events/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['events/test.png', 'events/test2.png']);
            */
        }
        $event->delete();

        return response()->json([
            'status' => 200,
            'message' => 'رویداد با موفقیت حذف شد',
        ]);
    }
}
