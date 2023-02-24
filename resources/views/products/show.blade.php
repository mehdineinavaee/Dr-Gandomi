@extends('layouts.app')
@section('title', 'مشاهده محصول')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده محصول', 'url' => url()->current(), 'bg' => $settings->products]],
    ])
    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image mr-15">
                        <img src="{{ asset('storage/products/' . $product->cover_detail) }}" alt="{{ $product->title }}">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc ml-15">
                        <h3>{{ $product->title }}</h3>

                        <div class="product-review">
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>

                        <div class="price">
                            <span class="new-price">
                                @if ($product->price != $product->total)
                                    <del>{{ number_format($product->price) }} تومان</del>
                                @endif
                                {{ number_format($product->total) }} تومان
                            </span>
                        </div>

                        <ul class="sku">
                            <li>
                                ویرایش
                                <span>{{ $product->edition }}</span>
                            </li>
                            <li>
                                انتشارات
                                <span>{{ $product->publisher->name }}</span>
                            </li>
                        </ul>

                        <div class="product-add-to-cart">
                            <span class="quantities">تعداد:</span>
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="ri-subtract-line"></i>
                                </span>

                                <input type="text" value="1">

                                <span class="plus-btn">
                                    <i class="ri-add-line"></i>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="default-btn mr-20">
                            افزودن به سبد
                        </button>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab product-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        توضیحات
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="product-details-tab-content">
                                            <p class="justify">
                                                {!! $product->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
