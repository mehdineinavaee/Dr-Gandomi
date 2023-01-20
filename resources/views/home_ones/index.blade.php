@extends('layouts.app')
@section('title', 'سایت رسمی دکتر ابوالفضل گندمی')
@section('content')
    <!-- Start Banner Area -->
    @include('areas.home_ones.banner_area')
    <!-- End Banner Area -->

    <!-- Start About Area -->
    @include('areas.home_ones.about_area')
    <!-- End About Area -->

    <!-- Start Study Area -->
    @include('areas.home_ones.study_area')
    <!-- End Study Area -->

    <!-- Start Our Campus Information Area -->
    @include('areas.home_ones.our_campus_information_area')
    <!-- End Our Campus Information Area -->

    <!-- Start Simple Steps Area -->
    @include('areas.home_ones.simple_steps_area')
    <!-- End Simple Steps Area -->

    <!-- Start Events Area -->
    @include('areas.home_ones.events_area')
    <!-- End Events Area -->

    <!-- Start Admission Area -->
    @include('areas.home_ones.admission_area')
    <!-- End Admission Area -->

    <!-- Start Find A Courses Area -->
    @include('areas.home_ones.find_a_courses_area')
    <!-- End Find A Courses Area -->

    <!-- Start Campus Experience Area -->
    @include('areas.home_ones.campus_experience_area')
    <!-- End Campus Experience Area -->

    <!-- Start Blog Area -->
    @include('areas.home_ones.blog_area')
    <!-- End Blog Area -->
@endsection
