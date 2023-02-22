@extends('layouts.app')
@section('title', 'جزئیات رویداد')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'جزئیات رویداد', 'url' => url()->current(), 'bg' => $settings->event_details]],
    ])
    <!-- Start Event Details Area -->
    <section class="event-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <span class="top-title">{{ $event->event_category->title }}</span>
                        <h2>{{ $event->title }}</h2>

                        <ul class="date-time">
                            <li>
                                <i class="ri-calendar-2-line"></i>
                                {{ $event->date }}
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                {{ $event->day }} {{ $event->hour }}
                            </li>
                            <li>
                                <i class="ri-map-pin-2-line"></i>
                                {{ $event->location }}
                            </li>
                        </ul>

                        <div class="gap-20"></div>

                        <img src="{{ asset('storage/events/' . $event->cover) }}" alt={{ $event->title }}>

                        <div class="gap-20"></div>

                        <h3>شرح رویداد</h3>
                        <p class="justify">
                            {!! $event->description !!}
                        </p>

                        <div class="gap-20"></div>

                        <h3>Event speakers</h3>
                    </div>

                    <div class="row justify-content-md-center mr-15">
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
                                        <span>MCA, Phd</span>
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

                <div class="col-lg-4">
                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>اطلاعات بیشتر</h3>

                            <ul>
                                <li>
                                    تاریخ شروع
                                    <span>{{ $event->start }}</span>
                                </li>
                                <li>
                                    تاریخ پایان
                                    <span>{{ $event->end }}</span>
                                </li>
                                <li>
                                    دسته بندی
                                    <span>{{ $event->event_category->title }}</span>
                                </li>
                                <li>
                                    سخنران
                                    <span>{{ $event->full_name }}</span>
                                </li>
                                <li style="min-height: 50px;">
                                    مکان
                                    <span>{{ $event->location }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Details Area -->
@endsection
