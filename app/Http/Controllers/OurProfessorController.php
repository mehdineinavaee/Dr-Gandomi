<?php

namespace App\Http\Controllers;

use App\Models\OurProfessor;
use App\Http\Requests\OurProfessorRequest;
use Illuminate\Support\Facades\Storage;

class OurProfessorController extends Controller
{
    public function admin()
    {
        $ourProfessors = OurProfessor::all();
        return view('our_professors.admin')
            ->with('ourProfessors', $ourProfessors);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourProfessors = OurProfessor::orderBy('id', 'desc')->paginate(6);
        return view('our_professors.index')
            ->with('ourProfessors', $ourProfessors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our_professors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurProfessorRequest $request)
    {
        $ourProfessor = new OurProfessor($request->all());
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/our_professors');
            $ourProfessor->cover = basename($path);
        }
        $ourProfessor->save();

        return redirect()->route('our_professors.admin')
            ->with('success', 'استاد جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurProfessor  $ourProfessor
     * @return \Illuminate\Http\Response
     */
    public function show(OurProfessor $ourProfessor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurProfessor  $ourProfessor
     * @return \Illuminate\Http\Response
     */
    public function edit(OurProfessor $ourProfessor)
    {
        return view('our_professors.edit')
            ->with('ourProfessor', $ourProfessor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurProfessor  $ourProfessor
     * @return \Illuminate\Http\Response
     */
    public function update(OurProfessorRequest $request, OurProfessor $ourProfessor)
    {
        if ($request->hasFile('cover')) {
            $fileName = $ourProfessor->cover;
            if (Storage::exists('public/our_professors/' . $fileName)) {
                Storage::delete('public/our_professors/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->cover->store('public/our_professors');
            $ourProfessor->cover = basename($path);
        }
        $ourProfessor->fill($request->only(['full_name', 'post', 'twitter', 'linkedin', 'instagram', 'facebook'])); // 'cover' nadashte bashe
        $ourProfessor->save();

        return redirect()->route('our_professors.admin')
            ->with('success', 'استاد ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurProfessor  $ourProfessor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ourProfessor = OurProfessor::find($id);
        $fileName = $ourProfessor->cover;
        if (Storage::exists('public/our_professors/' . $fileName)) {
            Storage::delete('public/our_professors/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
            */
        }
        $ourProfessor->delete();

        return response()->json([
            'status' => 200,
            'message' => 'استاد با موفقیت حذف شد',
        ]);
    }
}
