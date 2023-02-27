<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\Event;
use App\Models\OurProfessor;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EventController extends Controller
{
    public function admin()
    {
        $events = Event::orderBy('date', 'asc')
            ->orderBy('hour', 'asc')->get();
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
        // You need to install verta
        $nowDate = verta(Carbon::now()->format("Y-m-d"))->formatDate();
        // $nowYear = verta(Carbon::now()->format("Y-m-d"))->year;
        // $nowMonth = verta(Carbon::now()->format("Y-m-d"))->month;
        // $nowDay = verta(Carbon::now()->format("Y-m-d"))->day;
        $nowTime = Carbon::now('Asia/Tehran')->format("H:i:s");
        // echo ($nowDate);
        // echo ("<br>\n");
        // echo ($nowYear);
        // echo ("<br>\n");
        // echo ($nowMonth);
        // echo ("<br>\n");
        // echo ($nowDay);
        // echo ("<br>\n");
        // echo ($nowTime);

        $events = Event::orderBy('id', 'desc')->paginate(6);

        // Pass time to JS file in views/areas/home_ones/events_area.blade.php
        $time = Event::orderBy('date', 'asc')
            ->orderBy('hour', 'asc')
            ->whereDate('date', '>=', $nowDate)
            ->get();

        // dd($time);

        if ($time->isEmpty()) {
            $date = $nowDate;
            $hour = $nowTime;
        } else {
            foreach ($time as $key => $item) {
                if ($item->date === $nowDate && $item->hour < $nowTime) {
                    $time->pull($key);
                }
            }

            // dd($time->first());

            $date = $time->first()->date;
            $hour = $time->first()->hour;
        }
        // End pass

        return view('events.index', compact(array('date', 'hour')))
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
        $our_professors = OurProfessor::orderBy('name')->get();
        return view('events.create')
            ->with('event_categories', $event_categories)
            ->with('our_professors', $our_professors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $event = new Event($request->all());
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/events');
            $event->cover = basename($path);
        }
        $event->event_category()->associate($request->event_category);
        $event->supervisor()->associate($request->supervisor);
        $event->advisor()->associate($request->advisor);
        $event->referee()->associate($request->referee);
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
        $our_professors = OurProfessor::orderBy('name')->get();
        return view('events.edit')
            ->with('event', $event)
            ->with('event_categories', $event_categories)
            ->with('our_professors', $our_professors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, Event $event)
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
        $event->fill($request->only(['full_name', 'date', 'day', 'hour', 'location', 'title', 'description'])); // 'cover' nadashte bashe
        $event->event_category()->associate($request->event_category);
        $event->supervisor()->associate($request->supervisor);
        $event->advisor()->associate($request->advisor);
        $event->referee()->associate($request->referee);
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
