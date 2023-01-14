<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mode;
use Symfony\Component\VarDumper\VarDumper;

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
        $modes = Mode::all();
        $categories = Category::orderBy('title')->get();

        return view('courses.index')
            ->with('modes', $modes)
            ->with('categories', $categories)
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
        $myArray = explode(',', $request->categories);
        $course = new Course($request->all());
        $course->fee = str_replace(",", "", $course->fee);
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/courses');
            $course->cover = basename($path);
        }
        $course->mode()->associate($request->mode);
        $course->save();
        $course->categories()->attach($myArray);

        return redirect()->route('courses.index')
            ->with('success', 'دوره جدید ثبت شد');
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
        $myArray = explode(',', $request->categories);
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
        $course->fill($request->only(['title', 'description', 'duration', 'start_dates', 'fee', 'language', 'seats_available'])); // 'cover' nadashte bashe
        $course->fee = str_replace(",", "", $course->fee);
        $course->mode()->associate($request->mode);
        $course->categories()->sync($myArray);
        $course->save();

        return redirect()->route('courses.index')
            ->with('success', 'دوره ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $fileName = $course->cover;
        if (Storage::exists('public/courses/' . $fileName)) {
            Storage::delete('public/courses/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
        }
        $course->delete();
        return redirect()->route('courses.index')
            ->with('success', 'دوره حذف شد');
    }
}
