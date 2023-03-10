@extends('layouts.app')
@section('title', 'محصولات')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'محصولات', 'url' => url()->current(), 'bg' => $settings->products]],
    ])
    <!-- Start Product Area -->
    <div class="product-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="{{ asset('storage/products/' . $product->cover) }}" alt="{{ $product->title }}">

                                <ul>
                                    <li>
                                        <a href={{ route('cart.add', ['product' => $product->id]) }}>
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                <h3>{{ $product->title }}</h3>
                            </a>

                            <span class="price">
                                @if ($product->price != $product->total)
                                    <del>{{ number_format($product->price) }} تومان</del>
                                @endif
                                {{ number_format($product->total) }} تومان
                            </span>
                            @if ($product->new === 1)
                                <span class="new">جدید</span>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{ $products->links('common.pagination-links') }}
            </div>
        </div>
    </div>
    <!-- End Product Area -->
@endsection
