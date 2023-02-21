@extends('layouts.app')
@section('title', 'بلاگ')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'بلاگ', 'url' => url()->current(), 'bg' => $settings->blog]],
    ])

    <!-- Start Blog Area -->
    <section class="blog-post-area blog-post-left-sidebar ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-sidebar mr-15">
                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">آخرین خبرها</h3>
                            <ul>
                                @foreach ($latest_news as $item)
                                    <li>
                                        <a
                                            href="{{ route('blog_right_sidebars.show', ['blog_right_sidebar' => $item->id]) }}">
                                            {{ $item->title }}
                                            <img src="{{ asset('storage/blog_right_sidebars/' . $item->cover) }}"
                                                alt="{{ $item->title }}" style="width:80px;height:80px;">
                                        </a>
                                        <span> {{ $item->date }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row justify-content-md-center">
                        @foreach ($blogRightSidebars as $blogRightSidebar)
                            <div class="col-lg-12 col-md-6">
                                <div class="single-blog">
                                    <a href="{{ route('blog_right_sidebars.show', ['blog_right_sidebar' => $blogRightSidebar->id]) }}"
                                        class="blog-img">
                                        <img src="{{ asset('storage/blog_right_sidebars/' . $blogRightSidebar->cover) }}"
                                            alt="{{ $blogRightSidebar->title }}">
                                        <span>Academics</span>
                                    </a>
                                    <div class="blog-content">
                                        <ul>
                                            <li>
                                                <i class="ri-calendar-line"></i>
                                                <span>{{ $blogRightSidebar->date }}</span>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a
                                                href="{{ route('blog_right_sidebars.show', ['blog_right_sidebar' => $blogRightSidebar->id]) }}">
                                                {{ $blogRightSidebar->title }}
                                            </a>
                                        </h3>

                                        <p class="justify">
                                            {!! $blogRightSidebar->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $blogRightSidebars->links('common.pagination-links') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
