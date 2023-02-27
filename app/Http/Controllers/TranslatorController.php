<?php

namespace App\Http\Controllers;

use App\Models\Translator;
use App\Http\Requests\TranslatorRequest;

class TranslatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translators = Translator::orderBy('last_name', 'asc')->get();
        return view('translators.index')
            ->with('translators', $translators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $translators = Translator::all();
        return view('translators.create')
            ->with('translators', $translators);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TranslatorRequest $request)
    {
        $translator = new Translator($request->all());
        $translator->save();
        return redirect()->route('translators.index')
            ->with('success', 'مترجم جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function show(Translator $translator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function edit(Translator $translator)
    {
        return view('translators.edit')
            ->with('translator', $translator);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function update(TranslatorRequest $request, Translator $translator)
    {
        $translator->fill($request->all());
        $translator->save();
        return redirect()->route('translators.index')
            ->with('success', 'مترجم ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $translator = Translator::find($id);
        $translator->delete();

        return response()->json([
            'status' => 200,
            'message' => 'مترجم با موفقیت حذف شد',
        ]);
    }
}
