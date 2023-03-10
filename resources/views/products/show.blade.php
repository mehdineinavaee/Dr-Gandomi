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
                                @if ($product->publisher)
                                    <span>{{ $product->publisher->name }}</span>
                                @endif
                            </li>
                            <li>
                                مترجمان
                                @foreach ($product->translators as $item)
                                    <ul>
                                        <li style="font-weight: normal;">{{ $item->fullName }}</span>
                                    </ul>
                                @endforeach
                            </li>
                        </ul>

                        <a href={{ route('cart.add', ['product' => $product->id]) }} class="default-btn mr-20">
                            افزودن به سبد
                        </a>
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
