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
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="event-sidebar ml-15">
                        <div class="event-single-sidebar">
                            <h3>اطلاعات بیشتر</h3>

                            <ul>
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

                <div class="col-lg-12">
                    <h3>هیات داوران</h3>
                    <div class="row justify-content-md-center mr-15">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-team-member">
                                <img src="{{ asset('storage/our_professors/' . $event->supervisor->cover) }}"
                                    alt="Image">

                                <div class="team-content">
                                    <div class="team-social">
                                        <a href="javascript:void(0)" class="control">
                                            <i class="ri-share-fill"></i>
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="{{ $event->supervisor->facebook }}" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->supervisor->instagram }}" target="_blank">
                                                    <i class="ri-instagram-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->supervisor->linkedin }}" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->supervisor->twitter }}" target="_blank">
                                                    <i class="ri-twitter-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="team-name">
                                        <h3>{{ $event->supervisor->name }}</h3>
                                        <span>استاد راهنما</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="single-team-member">
                                <img src="{{ asset('storage/our_professors/' . $event->advisor->cover) }}" alt="Image">

                                <div class="team-content">
                                    <div class="team-social">
                                        <a href="javascript:void(0)" class="control">
                                            <i class="ri-share-fill"></i>
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="{{ $event->advisor->facebook }}" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->advisor->instagram }}" target="_blank">
                                                    <i class="ri-instagram-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->advisor->linkedin }}" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->advisor->twitter }}" target="_blank">
                                                    <i class="ri-twitter-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="team-name">
                                        <h3>{{ $event->advisor->name }}</h3>
                                        <span>استاد مشاور</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="single-team-member">
                                <img src="{{ asset('storage/our_professors/' . $event->referee->cover) }}" alt="Image">

                                <div class="team-content">
                                    <div class="team-social">
                                        <a href="javascript:void(0)" class="control">
                                            <i class="ri-share-fill"></i>
                                        </a>

                                        <ul>
                                            <li>
                                                <a href="{{ $event->referee->facebook }}" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->referee->instagram }}" target="_blank">
                                                    <i class="ri-instagram-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->referee->linkedin }}" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $event->referee->twitter }}" target="_blank">
                                                    <i class="ri-twitter-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="team-name">
                                        <h3>{{ $event->referee->name }}</h3>
                                        <span>داور</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event Details Area -->
@endsection
