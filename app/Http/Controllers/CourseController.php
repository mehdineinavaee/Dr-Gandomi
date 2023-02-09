<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Mode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function admin()
    {
        $courses = Course::all();
        return view('courses.admin')
            ->with('courses', $courses);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate(8);
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
        $modes = Mode::all();
        $categories = Category::orderBy('title')->get();
        return view('courses.create')
            ->with('modes', $modes)
            ->with('categories', $categories);
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

        return redirect()->route('courses.admin')
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
        $modes = Mode::all();
        $categories = Category::orderBy('title')->get();
        return view('courses.edit')
            ->with('course', $course)
            ->with('modes', $modes)
            ->with('categories', $categories);
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

        return redirect()->route('courses.admin')
            ->with('success', 'دوره ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $course = Course::find($id);
        $fileName = $course->cover;
        if (Storage::exists('public/courses/' . $fileName)) {
            Storage::delete('public/courses/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
        }
        $course->delete();

        return response()->json([
            'status' => 200,
            'message' => 'دوره با موفقیت حذف شد',
        ]);
    }
}
