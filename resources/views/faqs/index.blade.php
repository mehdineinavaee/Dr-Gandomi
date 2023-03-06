@extends('layouts.app')
@section('title', 'پرسش و پاسخ')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'پرسش و پاسخ', 'url' => url()->current(), 'bg' => $settings->faqs]],
    ])

    <!-- Start FAQ Area -->
    <section class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>سؤالات متداول</h2>
            </div>

            <div class="faq-bg">
                <div class="faq-accordion">
                    <ul class="accordion">
                        @foreach ($faqs as $faq)
                            <li class="accordion-item" style="border:0;">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="ri-add-line"></i>
                                    {{ $loop->index + 1 }}. {{ $faq->question }}
                                </a>

                                <div class="accordion-content">
                                    <p class="justify">
                                        {{ $faq->response }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start FAQ Contact Area -->
    <section class="faq-contact-area pb-100">
        <div class="container">
            <div class="contact-from-bg">
                <div class="section-title">
                    <h2>یک پیام سریع برای ما ارسال کنید</h2>
                </div>

                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="نام و نام خانوادگی">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="ایمیل">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="موبایل">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="موضوع">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                        data-error="Write your message" placeholder="پیام خود را بنویسید"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    ارسال پیام
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Contact Area -->
@endsection
