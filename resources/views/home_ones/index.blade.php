@extends('layouts.app')
@section('title', 'سایت رسمی دکتر ابوالفضل گندمی')
@section('content')
    <!-- Start Banner Area -->
    @include('areas.home_ones.banner_area')
    <!-- End Banner Area -->

    <!-- Start Study Area -->
    @include('areas.home_ones.study_area')
    <!-- End Study Area -->

    <!-- Start Events Area -->
    @include('areas.home_ones.events_area')
    <!-- End Events Area -->

    <!-- Start Blog Area -->
    @include('areas.home_ones.blog_area')
    <!-- End Blog Area -->
@endsection
