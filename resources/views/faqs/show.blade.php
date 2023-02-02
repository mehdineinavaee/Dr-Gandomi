@extends('layouts.app')
@section('title', 'مشاهده پرسش و پاسخ')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده پرسش و پاسخ', 'url' => url()->current()]],
    ])
    <!-- Start FAQs Details Area -->
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-sidebar ml-15">
                        <div class="courses-single-sidebar">
                            <div class="main-default-content mr-15">
                                <h2 class="justify">{{ $faq->question }}</h2>
                                <p class="justify">
                                    {{ $faq->response }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQs Details Area -->
@endsection
