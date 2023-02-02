<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin()
    {
        $galleries = Gallery::all();
        return view('galleries.admin')
            ->with('galleries', $galleries);
    }

    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->paginate(9);
        return view('galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('cover')) {
            foreach ($request->file('cover') as $image) {
                $imageName = time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('storage/galleries'), $imageName);
                Gallery::create([
                    'cover' => $imageName
                ]);
            }
        }

        return redirect()->route('galleries.admin')
            ->with('success', 'تصویر جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $fileName = $gallery->cover;
        if (Storage::exists('public/galleries/' . $fileName)) {
            Storage::delete('public/galleries/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
        }
        $gallery->delete();

        return response()->json([
            'status' => 200,
            'message' => 'تصویر با موفقیت حذف شد',
        ]);
    }

    public function deleteSelectedItems(Request $request)
    {
        if ($request->case !== null) {
            foreach ($request->case as $image) {
                $gallery = Gallery::find($image);
                $fileName = $gallery->cover;
                if (Storage::exists('public/galleries/' . $fileName)) {
                    Storage::delete('public/galleries/' . $fileName);
                    /*
                Delete Multiple File like this way
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
                }
            }
            Gallery::destroy($request->case);
            return redirect()->route('galleries.admin')
                ->with('success', 'تصاویر انتخابی حذف شدند');
        } else {
            return redirect()->route('galleries.admin')
                ->with('danger', 'مواردی را جهت حذف انتخاب کنید');
        }
    }
}
