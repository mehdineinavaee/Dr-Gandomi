@extends('layouts.app')
@section('title', 'دوره ها')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'دوره ها', 'url' => url()->current(), 'bg' => $settings->courses]],
    ])

    <!-- Start Study Area -->
    <section class="studys-area study-area-style-two ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Browse courses by study area</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna</p>
            </div>
            <div class="row justify-content-center">
                @foreach ($courses as $course)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-study style-img">
                            <img src="{{ asset('storage/courses/' . $course->cover) }}" alt="{{ $course->title }}">
                            <div class="single-study-content">
                                {{-- <i class="flaticon-finance"></i> --}}
                                <h3>
                                    <a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->title }}</a>
                                </h3>
                                <p class="justify">{!! Str::limit($course->description, 200, ' ...') !!}</p>

                                <a href="{{ route('courses.show', ['course' => $course->id]) }}" class="read-more">
                                    ادامه مطلب
                                    <span class="ri-arrow-left-line"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $courses->links('common.pagination-links') }}
            </div>
        </div>
    </section>
    <!-- End Study Area -->

    <!-- Start Study Area -->
    <section class="studys-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Demandable courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-study study-f3f3f4">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href="study-online.html">Administrative studies</a>
                        </h3>
                        <p class="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum
                            voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas
                            doloremque quis</p>

                        <a href="index.htm" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-study study-f3f3f4">
                        <i class="flaticon-contract"></i>
                        <h3>
                            <a href="study-online.html">Creative arts and design</a>
                        </h3>
                        <p class="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum
                            voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas
                            doloremque quis</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-study study-f3f3f4">
                        <i class="flaticon-computer-science"></i>
                        <h3>
                            <a href="study-online.html">Computer science</a>
                        </h3>
                        <p class="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil odio dolorum
                            voluptatibus inventore, non sint repellat mollitia omnis? Velit fugiat optio odio illum quas
                            doloremque quis</p>

                        <a href="study-online.html" class="read-more">
                            Find out more
                            <span class="ri-arrow-right-line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Study Area -->
@endsection
