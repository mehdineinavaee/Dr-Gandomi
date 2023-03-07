@extends('layouts.app')
@section('title', 'مشاهده فایل دانشجویی')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده فایل دانشجویی', 'url' => url()->current(), 'bg' => $settings->study]],
    ])
    <!-- Start Courses Details Area -->
    <section class="courses-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-default-content mr-15">
                        <h2 class="justify">{{ $study->title }}</h2>

                        <div class="gap-20"></div>

                        <div class="justify">
                            {!! $study->description !!}
                        </div>

                        <div class="gap-20"></div>

                        <div class="main-default-content mr-15">
                            <div class="course-odf-bg">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="course-pdf">
                                            <i class="ri-file-pdf-line"></i>
                                            <h3>{{ $study->title }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="download-pdf">
                                            <a href={{ route('studies.download', ['study' => $study->id]) }}
                                                class="default-btn">
                                                دانلود فایل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gap-20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Details Area -->
@endsection
