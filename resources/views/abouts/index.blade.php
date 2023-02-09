@extends('layouts.app')
@section('title', 'درباره ما')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-two mr-15">
                        <img src="assets/images/about-img-2.jpg" alt="Image">

                        <div class="about-shape">
                            <img src="assets/images/about-shape.png" alt="Image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content ml-15">
                        <span>About our University</span>
                        <h2>Our education system inspires the next generation.</h2>

                        <p>Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque
                            nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci
                            porta dapibus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus
                            et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper
                            sit amet ligula.</p>

                        <a href="about.html" class="default-btn">
                            Find out more
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Counter Area -->
    <section class="counter-area bg-color-f8fafb pt-100 pb-70">
        <div class="container">
            <div class="counter-bg">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduated"></i>

                            <h2>
                                <span class="odometer" data-count="4517">00</span>
                            </h2>
                            <h4>Students</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-teacher"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="640">00</span>
                                </h2>
                                <h4>Teachers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-book-1"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="54">00</span>
                                </h2>
                                <h4>Subjects</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter bg-style">
                            <i class="flaticon-graduation-cap"></i>

                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="269">00</span>
                                </h2>
                                <h4>Degrees</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape counter-shape-1">
                    <img src="assets/images/counter-shape-1.png" alt="Image">
                </div>
                <div class="shape counter-shape-2">
                    <img src="assets/images/counter-shape-2.png" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- Start Team Area -->
    <section class="team-area team-area-three pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our professors</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna</p>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
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

                <div class="col-lg-4 col-md-6">
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

                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
                        <img src="assets/images/team/team-3.jpg" alt="Image">

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
                                <h3>William Johnston</h3>
                                <span>PHD, Medical Sciences</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Application Submit Area -->
    <section class="application-submit-area pt-r-s-0 ptb-100">
        <div class="container">
            <div class="application-submit-bg application-submit-bg-style-three">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="application-submit-content">
                            <h2>Are you ready for your next journey with us?</h2>
                            <a href="application.html" class="default-btn">
                                Application form
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="application-submit-img">
                            <img src="assets/images/application-submit-img-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Application Submit Area -->
@endsection
