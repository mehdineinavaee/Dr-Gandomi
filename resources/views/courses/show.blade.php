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

                        <div class="course-odf-bg">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="course-pdf">
                                        <i class="ri-file-pdf-line"></i>
                                        <h3>All courses tution fees</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="download-pdf">
                                        <a href="index.htm#" class="default-btn">
                                            Download
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-20"></div>
                    </div>

                    <div class="mr-15">
                        <h3 class="professors-title">Our professors</h3>
                        <div class="row justify-content-md-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-team-member">
                                    <img src="assets/images/team/team-1.jpg" alt="Image">

                                    <div class="team-content">
                                        <div class="team-social">
                                            <a href="index.htm#" class="control">
                                                <i class="ri-share-fill"></i>
                                            </a>

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

                                        <div class="team-name">
                                            <h3>DAndrew M. Nichols</h3>
                                            <span>MCA, PHD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-team-member">
                                    <img src="assets/images/team/team-2.jpg" alt="Image">

                                    <div class="team-content">
                                        <div class="team-social">
                                            <a href="index.htm#" class="control">
                                                <i class="ri-share-fill"></i>
                                            </a>

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

                                        <div class="team-name">
                                            <h3>Chandra Ferrante</h3>
                                            <span>Assistant Professor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
