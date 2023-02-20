@extends('layouts.app')
@section('title', 'مشاهده بلاگ')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده بلاگ', 'url' => url()->current()]],
    ])
    <section class="blog-post-area blog-post-left-sidebar ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-sidebar mr-15">
                        <div class="sidebar-widget tags mb-0">
                            <h3>تگ ها</h3>
                            <ul>
                                @foreach ($myTagsArray as $item)
                                    <li>
                                        <a href="javascript:void(0)">{{ $item }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row justify-content-md-center">
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
                                        <a href="javascript:void(0)">
                                            {{ $blogRightSidebar->title }}
                                        </a>
                                    </h3>

                                    <p class="justify">
                                        {!! $blogRightSidebar->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
