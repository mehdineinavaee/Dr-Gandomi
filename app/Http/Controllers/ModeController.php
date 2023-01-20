<?php

namespace App\Http\Controllers;

use App\Models\Mode;
use Illuminate\Http\Request;

class ModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modes = Mode::all();
        return view('modes.index')
            ->with('modes', $modes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mode = new Mode($request->all());
        $mode->save();
        return redirect()->route('modes.index')
            ->with('success', 'روش برگزاری جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mode  $mode
     * @return \Illuminate\Http\Response
     */
    public function show(Mode $mode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mode  $mode
     * @return \Illuminate\Http\Response
     */
    public function edit(Mode $mode)
    {
        return view('modes.edit')
            ->with('mode', $mode);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mode  $mode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mode $mode)
    {
        $mode->fill($request->only(['title']));
        $mode->save();

        return redirect()->route('modes.index')
            ->with('success', 'روش برگزاری ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mode  $mode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mode = Mode::find($id);
        $mode->delete();

        return response()->json([
            'status' => 200,
            'message' => 'روش برگزاری با موفقیت حذف شد',
        ]);
    }
}
