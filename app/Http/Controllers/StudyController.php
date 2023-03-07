<?php

namespace App\Http\Controllers;

use App\Models\Study;
use App\Http\Requests\StudyRequest;
use Illuminate\Support\Facades\Storage;

class StudyController extends Controller
{
    public function admin()
    {
        $studies = Study::all();
        return view('studies.admin')
            ->with('studies', $studies);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::orderBy('id', 'desc')->paginate(9);
        return view('studies.index')
            ->with('studies', $studies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRequest $request)
    {
        $study = new Study($request->all());
        if ($request->hasFile('file')) {
            $path = $request->file->store('public/studies');
            $study->file = basename($path);
        }
        $study->save();

        return redirect()->route('studies.admin')
            ->with('success', 'فایل جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        return view('studies.show')
            ->with('study', $study);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('studies.edit')
            ->with('study', $study);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRequest $request, Study $study)
    {
        if ($request->hasFile('file')) {
            $fileName = $study->file;
            if (Storage::exists('public/studies/' . $fileName)) {
                Storage::delete('public/studies/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['studies/test.png', 'studies/test2.png']);
                */
            }
            $path = $request->file->store('public/studies');
            $study->file = basename($path);
        }
        $study->fill($request->only(['title', 'description'])); // 'file' nadashte bashe
        $study->save();

        return redirect()->route('studies.admin')
            ->with('success', 'فایل دانشجو ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study = Study::find($id);
        $fileName = $study->file;
        if (Storage::exists('public/studies/' . $fileName)) {
            Storage::delete('public/studies/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['studies/test.png', 'studies/test2.png']);
            */
        }
        $study->delete();

        return response()->json([
            'status' => 200,
            'message' => 'فایل دانشجو با موفقیت حذف شد',
        ]);
    }
}
