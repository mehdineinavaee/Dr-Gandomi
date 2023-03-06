<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('settings.edit')
            ->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        if ($request->hasFile('logo')) {
            $fileName = $setting->logo;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->logo->store('public/settings');
            $setting->logo = basename($path);
        }

        if ($request->hasFile('favicon')) {
            $fileName = $setting->favicon;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->favicon->store('public/settings');
            $setting->favicon = basename($path);
        }

        if ($request->hasFile('courses')) {
            $fileName = $setting->courses;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->courses->store('public/settings');
            $setting->courses = basename($path);
        }

        if ($request->hasFile('blog')) {
            $fileName = $setting->blog;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->blog->store('public/settings');
            $setting->blog = basename($path);
        }

        if ($request->hasFile('our_professors')) {
            $fileName = $setting->our_professors;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->our_professors->store('public/settings');
            $setting->our_professors = basename($path);
        }

        if ($request->hasFile('faqs')) {
            $fileName = $setting->faqs;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->faqs->store('public/settings');
            $setting->faqs = basename($path);
        }

        if ($request->hasFile('gallery')) {
            $fileName = $setting->gallery;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->gallery->store('public/settings');
            $setting->gallery = basename($path);
        }

        if ($request->hasFile('my_account')) {
            $fileName = $setting->my_account;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->my_account->store('public/settings');
            $setting->my_account = basename($path);
        }

        if ($request->hasFile('events')) {
            $fileName = $setting->events;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->events->store('public/settings');
            $setting->events = basename($path);
        }

        if ($request->hasFile('event_details')) {
            $fileName = $setting->event_details;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->event_details->store('public/settings');
            $setting->event_details = basename($path);
        }

        if ($request->hasFile('products')) {
            $fileName = $setting->products;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->products->store('public/settings');
            $setting->products = basename($path);
        }

        if ($request->hasFile('cart')) {
            $fileName = $setting->cart;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->cart->store('public/settings');
            $setting->cart = basename($path);
        }

        if ($request->hasFile('contact')) {
            $fileName = $setting->contact;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->contact->store('public/settings');
            $setting->contact = basename($path);
        }

        if ($request->hasFile('settings')) {
            $fileName = $setting->settings;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->settings->store('public/settings');
            $setting->settings = basename($path);
        }

        if ($request->hasFile('home_one')) {
            $fileName = $setting->home_one;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->home_one->store('public/settings');
            $setting->home_one = basename($path);
        }

        if ($request->hasFile('categories')) {
            $fileName = $setting->categories;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->categories->store('public/settings');
            $setting->categories = basename($path);
        }

        if ($request->hasFile('modes')) {
            $fileName = $setting->modes;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->modes->store('public/settings');
            $setting->modes = basename($path);
        }

        if ($request->hasFile('publishers')) {
            $fileName = $setting->publishers;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->publishers->store('public/settings');
            $setting->publishers = basename($path);
        }

        if ($request->hasFile('authors')) {
            $fileName = $setting->authors;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->authors->store('public/settings');
            $setting->authors = basename($path);
        }

        if ($request->hasFile('translators')) {
            $fileName = $setting->translators;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->translators->store('public/settings');
            $setting->translators = basename($path);
        }

        if ($request->hasFile('study')) {
            $fileName = $setting->study;
            if (Storage::exists('public/settings/' . $fileName)) {
                Storage::delete('public/settings/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['our_professors/test.png', 'our_professors/test2.png']);
                */
            }
            $path = $request->study->store('public/settings');
            $setting->study = basename($path);
        }

        $setting->fill($request->only(['phone_number', 'footer_description', 'address', 'email', 'tel', 'facebook', 'instagram', 'linkedin', 'twitter', 'google_map_area'])); // 'logo', 'favicon', ... nadashte bashe
        $setting->save();

        return redirect()->route('/')
            ->with('success', 'تنظیمات ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
