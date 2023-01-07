<?php

namespace App\Http\Controllers;

use App\Models\HomeThree;
use Illuminate\Http\Request;

class HomeThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home_threes.index');
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
     * @param  \App\Models\HomeThree  $homeThree
     * @return \Illuminate\Http\Response
     */
    public function show(HomeThree $homeThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeThree  $homeThree
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeThree $homeThree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeThree  $homeThree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeThree $homeThree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeThree  $homeThree
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeThree $homeThree)
    {
        //
    }
}
