@extends('layouts.app')
@section('title', 'گالری')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'گالری', 'url' => url()->current(), 'bg' => $settings->gallery]],
    ])
    <!-- Start Gallery Area -->
    <div class="gallery-area gallery-popup pt-100 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <img src="{{ asset('storage/galleries/' . $gallery->cover) }}" alt="Image">

                            <div class="gallery-item-content">
                                <div class="gallery-link">
                                    <a href="{{ asset('storage/galleries/' . $gallery->cover) }}">
                                        <i class="ri-add-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{ $galleries->links('common.pagination-links') }}
    <!-- End Gallery Area -->
@endsection
