<?php

namespace App\Http\Controllers;

use App\Models\NotFoundPage;
use Illuminate\Http\Request;

class NotFoundPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('not_found_pages.index');
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
     * @param  \App\Models\NotFoundPage  $notFoundPage
     * @return \Illuminate\Http\Response
     */
    public function show(NotFoundPage $notFoundPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotFoundPage  $notFoundPage
     * @return \Illuminate\Http\Response
     */
    public function edit(NotFoundPage $notFoundPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotFoundPage  $notFoundPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotFoundPage $notFoundPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotFoundPage  $notFoundPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotFoundPage $notFoundPage)
    {
        //
    }
}
