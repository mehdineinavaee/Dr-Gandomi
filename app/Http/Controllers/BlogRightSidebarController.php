<?php

namespace App\Http\Controllers;

use App\Models\BlogRightSidebar;
use App\Http\Requests\BlogRightSidebarRequest;
use Illuminate\Support\Facades\Storage;

class BlogRightSidebarController extends Controller
{
    public function admin()
    {
        $blogRightSidebars = BlogRightSidebar::all();
        return view('blog_right_sidebars.admin')
            ->with('blogRightSidebars', $blogRightSidebars);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogRightSidebars = BlogRightSidebar::orderBy('id', 'desc')->paginate(3);
        $latest_news = BlogRightSidebar::orderBy('id', 'desc')->take(3)->get();
        return view('blog_right_sidebars.index')
            ->with('blogRightSidebars', $blogRightSidebars)
            ->with('latest_news', $latest_news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_right_sidebars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRightSidebarRequest $request)
    {
        $blogRightSidebar = new BlogRightSidebar($request->all());
        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/blog_right_sidebars');
            $blogRightSidebar->cover = basename($path);
        }
        $blogRightSidebar->save();

        return redirect()->route('blog_right_sidebars.admin')
            ->with('success', 'بلاگ جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogRightSidebar  $blogRightSidebar
     * @return \Illuminate\Http\Response
     */
    public function show(BlogRightSidebar $blogRightSidebar)
    {
        $myTagsArray = explode('،', $blogRightSidebar->tags);
        return view('blog_right_sidebars.show')
            ->with('blogRightSidebar', $blogRightSidebar)
            ->with('myTagsArray', $myTagsArray);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogRightSidebar  $blogRightSidebar
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogRightSidebar $blogRightSidebar)
    {
        return view('blog_right_sidebars.edit')
            ->with('blogRightSidebar', $blogRightSidebar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogRightSidebar  $blogRightSidebar
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRightSidebarRequest $request, BlogRightSidebar $blogRightSidebar)
    {
        if ($request->hasFile('cover')) {
            $fileName = $blogRightSidebar->cover;
            if (Storage::exists('public/blog_right_sidebars/' . $fileName)) {
                Storage::delete('public/blog_right_sidebars/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['courses/test.png', 'courses/test2.png']);
                */
            }
            $path = $request->cover->store('public/blog_right_sidebars');
            $blogRightSidebar->cover = basename($path);
        }
        $blogRightSidebar->fill($request->only(['date', 'title', 'description', 'tags'])); // 'cover' nadashte bashe
        $blogRightSidebar->save();

        return redirect()->route('blog_right_sidebars.admin')
            ->with('success', 'بلاگ ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogRightSidebar  $blogRightSidebar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogRightSidebar = BlogRightSidebar::find($id);
        $fileName = $blogRightSidebar->cover;
        if (Storage::exists('public/blog_right_sidebars/' . $fileName)) {
            Storage::delete('public/blog_right_sidebars/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
        }
        $blogRightSidebar->delete();

        return response()->json([
            'status' => 200,
            'message' => 'بلاگ با موفقیت حذف شد',
        ]);
    }
}
