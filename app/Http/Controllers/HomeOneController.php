<?php

namespace App\Http\Controllers;

use App\Models\BlogRightSidebar;
use App\Models\HomeOne;
use App\Models\Event;
use App\Http\Requests\HomeOneRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class HomeOneController extends Controller
{
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

        $home_ones = HomeOne::find(1);
        $events = Event::orderBy('id', 'desc')
            ->take(3)
            ->get();
        $news = BlogRightSidebar::orderBy('id', 'desc')
            ->take(3)
            ->get();

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

            // dd($time);
            // dd($time->first());

            if ($time->isEmpty()) {
                $date = $nowDate;
                $hour = $nowTime;
            } else {
                $date = $time->first()->date;
                $hour = $time->first()->hour;
            }
        }
        // End pass

        return view('home_ones.index', compact(array('date', 'hour')))
            ->with('home_ones', $home_ones)
            ->with('events', $events)
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeOneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeOne  $homeOne
     * @return \Illuminate\Http\Response
     */
    public function show(HomeOne $homeOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeOne  $homeOne
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeOne $homeOne)
    {
        return view('home_ones.edit')
            ->with('home_one', $homeOne);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeOne  $homeOne
     * @return \Illuminate\Http\Response
     */
    public function update(HomeOneRequest $request, HomeOne $homeOne)
    {
        if ($request->hasFile('backgroundBanner')) {
            $fileName = $homeOne->backgroundBanner;
            if (Storage::exists('public/home_one/' . $fileName)) {
                Storage::delete('public/home_one/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->backgroundBanner->store('public/home_one');
            $homeOne->backgroundBanner = basename($path);
        }

        if ($request->hasFile('banner')) {
            $fileName = $homeOne->banner;
            if (Storage::exists('public/home_one/' . $fileName)) {
                Storage::delete('public/home_one/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->banner->store('public/home_one');
            $homeOne->banner = basename($path);
        }

        $homeOne->fill($request->only(['welcome', 'slogen'])); // 'backgroundBanner', 'banner' nadashte bashe
        $homeOne->save();

        return redirect()->route('/')
            ->with('success', 'صفحه اصلی ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeOne  $homeOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeOne $homeOne)
    {
        //
    }
}
