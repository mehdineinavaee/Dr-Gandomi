<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Http\Requests\EventCategoryRequest;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_categories = EventCategory::all();
        return view('event_categories.index')
            ->with('event_categories', $event_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventCategoryRequest $request)
    {
        $category = new EventCategory($request->all());
        $category->save();
        return redirect()->route('event_categories.index')
            ->with('success', 'دسته بندی جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EventCategory $eventCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EventCategory $eventCategory)
    {
        return view('event_categories.edit')
            ->with('eventCategory', $eventCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function update(EventCategoryRequest $request, EventCategory $eventCategory)
    {
        $eventCategory->fill($request->only(['title']));
        $eventCategory->save();

        return redirect()->route('event_categories.index')
            ->with('success', 'دسته بندی ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventCategory  $eventCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventCategory = EventCategory::find($id);
        $eventCategory->delete();

        return response()->json([
            'status' => 200,
            'message' => 'دسته بندی با موفقیت حذف شد',
        ]);
    }
}
