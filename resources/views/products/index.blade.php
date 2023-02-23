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
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cart.html">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="product-details.html">
                                <h3>{{ $product->title }}</h3>
                            </a>

                            <span class="price"> <del>{{ number_format($product->price) }} تومان</del>
                                {{ number_format($product->total) }} تومان</span>
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

    <!-- Start Product View One Area -->
    <div class="modal fade product-view-one" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <span aria-hidden="true">
                        <i class="ri-close-line"></i>
                    </span>
                </button>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <img src="assets/images/product/product-1.jpg" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="product-content">
                            <h3>
                                <a href="index.htm#">Natural</a>
                            </h3>

                            <div class="price">
                                <span class="new-price">$10.00</span>
                            </div>

                            <ul class="product-info">
                                <li>
                                    <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad
                                        reprehenderit fuga nam, non odit necessitatibus facilis beatae temporibus
                                    </p>
                                </li>
                            </ul>

                            <div class="product-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="ri-subtract-line"></i>
                                    </span>

                                    <input type="text" value="1">

                                    <span class="plus-btn">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>

                                <a href="cart.html" class="default-btn">
                                    Add to cart
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product View One Area -->
@endsection
