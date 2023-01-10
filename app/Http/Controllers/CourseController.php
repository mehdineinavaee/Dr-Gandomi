<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course($request->all());
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/courses');
            $course->cover = basename($path);
        }
        $course->save();

        return redirect()->back()
            ->with('success', 'درس جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show')
            ->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit')
            ->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        if ($request->hasFile('cover')) {
            $fileName = $course->cover;
            if (Storage::exists('public/courses/' . $fileName)) {
                Storage::delete('public/courses/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['courses/test.png', 'courses/test2.png']);
                */
            }
            $path = $request->cover->store('public/courses');
            $course->cover = basename($path);
        }
        $course->fill($request->only(['title', 'description'])); // 'cover' nadashte bashe
        $course->save();

        return redirect()->route('courses.index')
            ->with('success', 'درس ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')
            ->with('success', 'درس حذف شد');
    }
}
