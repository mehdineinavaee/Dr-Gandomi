@extends('layouts.app')
@section('title', 'بلاگ')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-22">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog right sidebar</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Blog right sidebar</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-post-area blog-post-left-sidebar ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-sidebar mr-15">

                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">Latest news</h3>

                            <ul>
                                <li>
                                    <a href="news-details.html">
                                        Managing the study of management
                                        <img src="assets/images/blog-details/blog-3.jpg" alt="Image">
                                    </a>
                                    <span>Murch 08, 2021</span>
                                </li>
                                <li>
                                    <a href="news-details.html">
                                        Show your appreciation this valentine's day!
                                        <img src="assets/images/blog-details/blog-2.jpg" alt="Image">
                                    </a>
                                    <span>Murch 11, 2021</span>
                                </li>
                                <li>
                                    <a href="news-details.html">
                                        Positivity and productivity during COVID-19
                                        <img src="assets/images/blog-details/blog-1.jpg" alt="Image">
                                    </a>
                                    <span>Murch 10, 2021</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget tags mb-0">
                            <h3>Tags</h3>

                            <ul>
                                <li>
                                    <a href="index.htm#">Academies</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Students</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Alumni</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Business</a>
                                </li>
                                <li>
                                    <a href="index.htm#">University</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Engineering</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Course</a>
                                </li>
                                <li>
                                    <a href="index.htm#">Scholarships</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-12 col-md-6">
                            <div class="single-blog">
                                <a href="blog-details.html" class="blog-img">
                                    <img src="assets/images/blog/blog-1.jpg" alt="Image">
                                    <span>Academics</span>
                                </a>

                                <div class="blog-content">
                                    <ul>
                                        <li>
                                            <i class="ri-calendar-line"></i>
                                            <span>26 March, 2021</span>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="blog-details.html">
                                            How I applying to university
                                        </a>
                                    </h3>

                                    <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                        nemo unde, porro cum asperiores illum quia voluptatum? Vero corporis aspernatur,
                                        saepe iusto tempora maiores qui optio eveniet soluta ipsa inventore! ipsum dolor sit
                                        amet consectetur adipisicing elit. Inventore nemo unde asperiores illum quia
                                        voluptatum asperiores illum quia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="single-blog">
                                <a href="blog-details.html" class="blog-img">
                                    <img src="assets/images/blog/blog-2.jpg" alt="Image">
                                    <span>Academics</span>
                                </a>

                                <div class="blog-content">
                                    <ul>
                                        <li>
                                            <i class="ri-calendar-line"></i>
                                            <span>28 March, 2021</span>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="blog-details.html">
                                            What and where choosing to study
                                        </a>
                                    </h3>

                                    <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                        nemo unde, porro cum asperiores illum quia voluptatum? Vero corporis aspernatur,
                                        saepe iusto tempora maiores qui optio eveniet soluta ipsa inventore! ipsum dolor sit
                                        amet consectetur adipisicing elit. Inventore nemo unde asperiores illum quia
                                        voluptatum asperiores illum quia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="single-blog">
                                <a href="blog-details.html" class="blog-img">
                                    <img src="assets/images/blog/blog-3.jpg" alt="Image">
                                    <span>Academics</span>
                                </a>

                                <div class="blog-content">
                                    <ul>
                                        <li>
                                            <i class="ri-calendar-line"></i>
                                            <span>29 March, 2021</span>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="blog-details.html">
                                            A day in the life of a student
                                        </a>
                                    </h3>

                                    <p class="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                        nemo unde, porro cum asperiores illum quia voluptatum? Vero corporis aspernatur,
                                        saepe iusto tempora maiores qui optio eveniet soluta ipsa inventore! ipsum dolor sit
                                        amet consectetur adipisicing elit. Inventore nemo unde asperiores illum quia
                                        voluptatum asperiores illum quia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
