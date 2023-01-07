@extends('layouts.app')
@section('title', 'رویدادها')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-5">
        <div class="container">
            <div class="page-title-content">
                <h2>Events</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Events Area -->
    <section class="events-area events-area-style-two ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="events-timer mr-15">
                        <div class="event-img">
                            <img src="assets/images/event-img.jpg" alt="Image">
                        </div>

                        <span>Next Event</span>

                        <div id="timer">
                            <div id="days"></div>
                            <div id="hours"></div>
                            <div id="minutes"></div>
                            <div id="seconds"></div>
                        </div>

                        <a href="index.htm#" class="default-btn">
                            Book now
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="events-content ml-15">
                        <span>Events</span>
                        <h2>Upcoming Events</h2>

                        <ul class="events-list">
                            <li>
                                <div class="events-date">
                                    <span class="mb-2">01 May</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        Universities admission conference 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">01 May</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        History and culture open day conference 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">01 May</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        Undergraduate & Postgraduate Open Days 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">07 Jun</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        Graduation ceremonies conference 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt
                                    ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">15 Jun</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        Innovation awards 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <li>
                                <div class="events-date">
                                    <span class="mb-2">25 Jun</span>
                                    <span>2021</span>
                                </div>

                                <span>Conference</span>
                                <h3>
                                    <a href="event-details.html">
                                        Marketing and communication awards 2021
                                    </a>
                                </h3>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>

                                <a href="event-details.html" class="read-more">
                                    Find out more
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </li>

                            <div class="pagination-area">
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="index.htm#" class="page-numbers">2</a>
                                <a href="index.htm#" class="page-numbers">3</a>

                                <a href="index.htm#" class="next page-numbers">
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Area -->
@endsection
