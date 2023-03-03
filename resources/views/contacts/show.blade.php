@extends('layouts.app')
@section('title', 'مشاهده پیام')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده پیام', 'url' => url()->current(), 'bg' => $settings->courses]],
    ])
    <!-- Start Courses Details Area -->
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-default-content mr-15">
                        <h2 class="justify">{{ $contact->msg_subject }}</h2>

                        <div class="gap-20"></div>

                        <div class="justify">
                            {{ $contact->message }}
                        </div>

                        <div class="gap-20"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="courses-sidebar ml-15">
                        <div class="courses-single-sidebar">
                            <h3>اطلاعات فرستنده</h3>

                            <ul>
                                <li>
                                    نام و نام خانوادگی
                                    <span>
                                        {{ $contact->full_name }}
                                    </span>
                                </li>
                                <li>
                                    ایمیل
                                    <span>{{ $contact->email }}</span>
                                </li>
                                <li>
                                    همراه
                                    <span>{{ $contact->phone_number }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Details Area -->
@endsection
