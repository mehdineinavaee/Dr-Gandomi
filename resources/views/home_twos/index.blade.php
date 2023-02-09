@extends('layouts.app')
@section('title', 'سایت رسمی دکتر ابوالفضل گندمی')
@section('content')
    <!-- Start Banner Area -->
    @include('areas.home_twos.banner_area')
    <!-- End Banner Area -->

    <!-- Start Study Area -->
    @include('areas.home_twos.study_area')
    <!-- End Study Area -->

    <!-- Start Events Area -->
    @include('areas.home_twos.events_area')
    <!-- End Events Area -->

    <!-- Start Counter Area -->
    @include('areas.home_twos.counter_area')
    <!-- End Counter Area -->

    <!-- Start Team Area -->
    @include('areas.home_twos.team_area')
    <!-- End Team Area -->

    <!-- Start Application Submit Area -->
    @include('areas.home_twos.application_submit_area')
    <!-- End Application Submit Area -->

    <!-- Start Blog Area -->
    @include('areas.home_twos.blog_area')
    <!-- End Blog Area -->
@endsection
