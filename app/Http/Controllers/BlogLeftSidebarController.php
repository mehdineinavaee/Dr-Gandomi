<?php

namespace App\Http\Controllers;

use App\Models\BlogLeftSidebar;
use Illuminate\Http\Request;

class BlogLeftSidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog_left_sidebars.index');
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
     * @param  \App\Models\BlogLeftSidebar  $blogLeftSidebar
     * @return \Illuminate\Http\Response
     */
    public function show(BlogLeftSidebar $blogLeftSidebar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogLeftSidebar  $blogLeftSidebar
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogLeftSidebar $blogLeftSidebar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogLeftSidebar  $blogLeftSidebar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogLeftSidebar $blogLeftSidebar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogLeftSidebar  $blogLeftSidebar
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogLeftSidebar $blogLeftSidebar)
    {
        //
    }
}
