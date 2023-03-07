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
                <h2>بهترین دوره های آموزشی را از ما بخواهید</h2>
                <p>
                    جهت اطلاعات بیشتر در خصوص دوره های آموزشی می توانید با ما در تماس باشید
                </p>
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
@endsection
