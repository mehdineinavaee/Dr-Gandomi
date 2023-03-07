@extends('layouts.app')
@section('title', 'مشاهده دوره')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده دوره', 'url' => url()->current(), 'bg' => $settings->courses]],
    ])
    <!-- Start Courses Details Area -->
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <h2 class="justify">{{ $course->title }}</h2>

                        <div class="gap-20"></div>

                        <img src="{{ asset('storage/courses/' . $course->cover) }}" alt="{{ $course->title }}">

                        <div class="gap-20"></div>

                        {!! $course->description !!}

                        <div class="gap-20"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="courses-sidebar ml-15">
                        <div class="courses-single-sidebar">
                            <h3>اطلاعات دوره</h3>

                            <ul>
                                <li>
                                    دسته بندی
                                    @foreach ($course->categories as $category)
                                        <span class="badge rounded-pill bg-info text-dark" style="margin-right: 3px">
                                            {{ $category->title }}
                                        </span>
                                    @endforeach
                                </li>
                                <li>
                                    روش برگزاری
                                    <span>{{ $course->mode->title }}</span>
                                </li>
                                <li>
                                    مدت دوره
                                    <span>{{ $course->duration }}</span>
                                </li>
                                <li>
                                    تاریخ شروع
                                    <span>{{ $course->start_dates }}</span>
                                </li>
                                <li>
                                    هزینه دوره
                                    <span>{{ number_format($course->fee) }} تومان</span>
                                </li>
                                <li>
                                    زبان
                                    <span>{{ $course->language }}</span>
                                </li>
                                <li>
                                    تعداد صندلی فعال
                                    <span>{{ $course->seats_available }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Details Area -->
@endsection
