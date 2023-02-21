@extends('layouts.app')
@section('title', 'محصولات')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'محصولات', 'url' => url()->current(), 'bg' => $settings->products]],
    ])
    <!-- Start Product Area -->
    <div class="product-area ptb-100">
        <div class="container">
            <div class="showing-result">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="showing-result-count">
                            <p>Showing 1-8 of 14 Results</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="showing-top-bar-ordering">
                            <span>Shop By:</span>
                            <select>
                                <option value="1">Default Sorting</option>
                                <option value="2">Natural Book</option>
                                <option value="3">nature Book</option>
                                <option value="4">Soft cover book</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img src="{{ asset('storage/products/' . $product->cover) }}" alt="{{ $product->title }}">

                                <ul>

                                    <li>
                                        <a href="index.htm#">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.htm#" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <div class="product-view-one-image">
                            <div id="big" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets/images/product/product-1.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-2.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-3.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-4.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-5.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-6.jpg" alt="Image">
                                </div>
                            </div>

                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets/images/product/product-1.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-2.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-3.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-4.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-5.jpg" alt="Image">
                                </div>

                                <div class="item">
                                    <img src="assets/images/product/product-6.jpg" alt="Image">
                                </div>
                            </div>
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

                            <div class="product-review">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <a href="index.htm#" class="rating-count">4 Reviews</a>
                            </div>

                            <ul class="product-info">
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad reprehenderit
                                        fuga nam, non odit necessitatibus facilis beatae temporibus</p>
                                </li>
                                <li>
                                    <span>Availability:</span> <a href="index.htm#">In Stock (8 Items)</a>
                                </li>
                                <li>
                                    <span>Product Type:</span> <a href="index.htm#">Book</a>
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

                            <div class="share-this-product">
                                <h3>Share this product</h3>

                                <ul>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.facebook.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/'"
                                            target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.instagram.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.instagram.com/'"
                                            target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://www.linkedin.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.linkedin.com/'"
                                            target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:if(confirm('https://twitter.com/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://twitter.com/'"
                                            target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product View One Area -->
@endsection
