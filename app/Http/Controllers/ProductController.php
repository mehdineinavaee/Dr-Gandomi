<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Translator;

class ProductController extends Controller
{
    public function admin()
    {
        $products = Product::all();
        return view('products.admin')
            ->with('products', $products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publisher::all();
        $authors = Author::orderBy('first_name')->orderBy('last_name')->get();
        $translators = Translator::orderBy('first_name')->orderBy('last_name')->get();
        return view('products.create')
            ->with('publishers', $publishers)
            ->with('authors', $authors)
            ->with('translators', $translators);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->price = str_replace(",", "", $request->price);
        $product->total = $product->price - (($product->price * $product->discount) / 100);

        if ($request->has('new')) {
            $product->new = 1;
        }

        if ($request->hasFile('cover')) {
            $path = $request->cover->store('public/products');
            $product->cover = basename($path);
        }

        if ($request->hasFile('cover_detail')) {
            $path = $request->cover_detail->store('public/products');
            $product->cover_detail = basename($path);
        }

        $product->publisher()->associate($request->publisher);

        $product->save();

        $myAuthorsArray = explode(',', $request->authors);
        $product->authors()->attach($myAuthorsArray);

        if ($request->translators !== null) {
            $myTranslatorsArray = explode(',', $request->translators);
            $product->translators()->attach($myTranslatorsArray);
        }

        return redirect()->route('products.admin')
            ->with('success', 'محصول جدید ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $publishers = Publisher::all();
        $authors = Author::all();
        $translators = Translator::all();
        return view('products.edit')
            ->with('product', $product)
            ->with('publishers', $publishers)
            ->with('authors', $authors)
            ->with('translators', $translators);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('cover')) {
            $fileName = $product->cover;
            if (Storage::exists('public/products/' . $fileName)) {
                Storage::delete('public/products/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['courses/test.png', 'courses/test2.png']);
                */
            }
            $path = $request->cover->store('public/products');
            $product->cover = basename($path);
        }
        if ($request->hasFile('cover_detail')) {
            $fileName = $product->cover_detail;
            if (Storage::exists('public/products/' . $fileName)) {
                Storage::delete('public/products/' . $fileName);
                /*
                    Delete Multiple File like this way
                    Storage::delete(['products/test.png', 'products/test2.png']);
                */
            }
            $path = $request->cover_detail->store('public/products');
            $product->cover_detail = basename($path);
        }
        $product->fill($request->only(['title', 'price', 'discount', 'total', 'new', 'edition', 'description'])); // 'cover', 'cover_detail' nadashte bashe
        $product->price = str_replace(",", "", $product->price);
        $product->total = $product->price - (($product->price * $product->discount) / 100);
        if ($request->has('new')) {
            $product->new = 1;
        } else {
            $product->new = 0;
        }

        $product->publisher()->associate($request->publisher);

        $myAuthorsArray = explode(',', $request->authors);
        $product->authors()->sync($myAuthorsArray);

        $myTranslatorsArray = explode(',', $request->translators);
        $product->translators()->sync($myTranslatorsArray);

        $product->save();

        return redirect()->route('products.admin')
            ->with('success', 'محصول ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $fileName = $product->cover;
        if (Storage::exists('public/products/' . $fileName)) {
            Storage::delete('public/products/' . $fileName);
            /*
                Delete Multiple File like this way
                Storage::delete(['products/test.png', 'products/test2.png']);
            */
        }

        $fileNameDetail = $product->cover_detail;
        if (Storage::exists('public/products/' . $fileNameDetail)) {
            Storage::delete('public/products/' . $fileNameDetail);
            /*
                Delete Multiple File like this way
                Storage::delete(['products/test.png', 'products/test2.png']);
            */
        }
        $product->delete();

        return response()->json([
            'status' => 200,
            'message' => 'محصول با موفقیت حذف شد',
        ]);
    }
}
