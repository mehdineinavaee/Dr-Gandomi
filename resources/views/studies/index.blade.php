@extends('layouts.app')
@section('title', 'فایل های دانشجو')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'فایل های دانشجو', 'url' => url()->current(), 'bg' => $settings->study]],
    ])

    <!-- Start Study Area -->
    <section class="studys-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>فایل های درخواستی</h2>
                <p>
                    دانشجویان می توانند دروس مورد نظر خود را انتخاب کرده و فایل های ارائه شده را دانلود کنند.
                </p>
            </div>

            <div class="row justify-content-center">
                @foreach ($studies as $study)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-study study-f3f3f4">
                            <i class="flaticon-contract"></i>
                            <h3>
                                <a href="study-online.html">{{ $study->title }}</a>
                            </h3>
                            <p class="justify">
                                {{ $study->description }}
                            </p>

                            <a href="index.htm" class="read-more">
                                دانلود فایل
                                <span class="ri-arrow-right-line"></span>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $studies->links('common.pagination-links') }}
            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
