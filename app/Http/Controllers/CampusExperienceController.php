<?php

namespace App\Http\Controllers;

use App\Models\CampusExperience;
use Illuminate\Http\Request;

class CampusExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('campus_experiences.index');
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
     * @param  \App\Models\CampusExperience  $campusExperience
     * @return \Illuminate\Http\Response
     */
    public function show(CampusExperience $campusExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampusExperience  $campusExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(CampusExperience $campusExperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampusExperience  $campusExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampusExperience $campusExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampusExperience  $campusExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampusExperience $campusExperience)
    {
        //
    }
}
