<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('products.create');
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
        $product->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit')
            ->with('product', $product);
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
        $product->fill($request->only(['title', 'price', 'discount', 'total', 'new'])); // 'cover' nadashte bashe
        $product->price = str_replace(",", "", $product->price);
        $product->total = $product->price - (($product->price * $product->discount) / 100);
        if ($request->has('new')) {
            $product->new = 1;
        } else {
            $product->new = 0;
        }
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
                Storage::delete(['teachers/test.png', 'teachers/test2.png']);
            */
        }
        $product->delete();

        return response()->json([
            'status' => 200,
            'message' => 'محصول با موفقیت حذف شد',
        ]);
    }
}
