<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart');
        $productIds = $cart ? array_keys($cart) : [];
        $products = Product::find($productIds);
        return view('carts.index')
            ->with('products', $products)
            ->with('cart', $cart);
    }

    public function add(Product $product)
    {
        $cart = session('cart');
        if (empty($cart)) {
            $cart = [
                $product->id => 1
            ];
        } else {
            if (isset($cart[$product->id])) {
                $cart[$product->id]++;
            } else {
                $cart[$product->id] = 1;
            }
        }

        session(['cart' => $cart]);
        return back()->with('success', $product->title . ' به سبد خرید اضافه شد');
    }

    public function destroy(Product $product)
    {
        $cart = session('cart');
        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
        }
        session(['cart' => $cart]);
        return back()->with('info', 'محصول از سبد خرید حذف شد');
    }
}
