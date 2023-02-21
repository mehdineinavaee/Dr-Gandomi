<?php

namespace App\Http\Controllers;

use App\Models\HomeOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_ones = HomeOne::find(1);
        return view('home_ones.index')
            ->with('home_ones', $home_ones);
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
    public function store(Request $request)
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
    public function update(Request $request, HomeOne $homeOne)
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
            $path = $request->backgroundBanner->storeAs('public/home_one', "background_banner.jpg");
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
            $path = $request->banner->storeAs('public/home_one', "banner.jpg");
            $homeOne->banner = basename($path);
        }

        $homeOne->fill($request->only(['welcome', 'slogen'])); // 'backgroundBanner', 'banner' nadashte bashe
        $homeOne->save();

        return redirect()->back()
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
