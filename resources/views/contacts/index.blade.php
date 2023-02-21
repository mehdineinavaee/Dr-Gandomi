@extends('layouts.app')
@section('title', 'تماس با ما')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'تماس با ما', 'url' => url()->current(), 'bg' => $settings->contact]],
    ])
    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($contact as $item)
                    <div class="col-lg-7">
                        <div class="map-area">
                            {!! $item->google_map_area !!}
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="contact-info">
                            <h2>با ما در تماس باشید</h2>

                            <ul class="address">
                                <li class="location">
                                    <i class="ri-map-pin-2-fill"></i>
                                    <span>آدرس</span>
                                    {{ $item->address }}
                                </li>
                                <li>
                                    <i class="ri-mail-line"></i>
                                    <span>ایمیل</span>
                                    {{ $item->email }}
                                </li>
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <span>تلفن</span>
                                    <a href="tel:{{ $item->tell }}">{{ $item->tell }}</a>
                                </li>
                            </ul>

                            <h3>ما را در شبکه مجازی دنبال کنید</h3>

                            <ul class="social-link">
                                <li>
                                    <a href="{{ $item->facebook }}" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $item->instagram }}" target="_blank">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $item->linkedin }}" target="_blank">
                                        <i class="ri-linkedin-box-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $item->twitter }}" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>برای ما پیام فوری ارسال کنید</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis ut nostrum, quibusdam, voluptatum
                    eaque illo cum, aperiam accusantium reprehenderit</p>
            </div>

            <form id="contactForm" autocomplete="off">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>نام و نام خانوادگی</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="Please enter your name">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>ایمیل</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter your email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>همراه</label>
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="Please enter your number" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>موضوع</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                data-error="Please enter your subject">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>متن پیام</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
                                data-error="Write your message"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            <span>ارسال پیام</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
