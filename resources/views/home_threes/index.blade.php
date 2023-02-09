@extends('layouts.app')
@section('title', 'سایت رسمی دکتر ابوالفضل گندمی')
@section('content')
    <!-- Start Banner Area -->
    @include('areas.home_threes.banner_area')
    <!-- End Banner Area -->

    <!-- Start Study Area -->
    @include('areas.home_threes.study_area')
    <!-- End Study Area -->

    <!-- Start Counter Area -->
    @include('areas.home_threes.counter_area')
    <!-- End Counter Area -->

    <!-- Start Events Area -->
    @include('areas.home_threes.events_area')
    <!-- End Events Area -->

    <!-- Start Team Area -->
    @include('areas.home_threes.team_area')
    <!-- End Team Area -->

    <!-- Start Application Submit Area -->
    @include('areas.home_threes.application_submit_area')
    <!-- End Application Submit Area -->

    <!-- Start Costing Area -->
    @include('areas.home_threes.costing_area')
    <!-- End Costing Area -->

    <!-- Start Blog Area -->
    @include('areas.home_threes.blog_area')
    <!-- End Blog Area -->
@endsection
