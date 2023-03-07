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
                <div class="col-lg-7">
                    <div class="map-area">
                        {!! $settings->google_map_area !!}
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        @if ($settings->address == null && $settings->email == null && $settings->tel == null)
                            <span></span>
                        @else
                            <h2>با ما در تماس باشید</h2>

                            <ul class="address">
                                @if ($settings->address)
                                    <li class="location">
                                        <i class="ri-map-pin-2-fill"></i>
                                        <span>آدرس</span>
                                        {{ $settings->address }}
                                    </li>
                                @endif
                                @if ($settings->email)
                                    <li>
                                        <i class="ri-mail-line"></i>
                                        <span>ایمیل</span>
                                        {{ $settings->email }}
                                    </li>
                                @endif
                                @if ($settings->tel)
                                    <li>
                                        <i class="ri-phone-fill"></i>
                                        <span>تلفن</span>
                                        <a href="tel:{{ $settings->tel }}">{{ $settings->tel }}</a>
                                    </li>
                                @endif
                            </ul>
                        @endif

                        @if (
                            $settings->facebook == null &&
                                $settings->instagram == null &&
                                $settings->linkedin == null &&
                                $settings->twitter == null)
                            <span></span>
                        @else
                            <h3>ما را در شبکه مجازی دنبال کنید</h3>
                            <ul class="social-link">
                                @if ($settings->facebook)
                                    <li>
                                        <a href="{{ $settings->facebook }}" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($settings->instagram)
                                    <li>
                                        <a href="{{ $settings->instagram }}" target="_blank">
                                            <i class="ri-instagram-fill"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($settings->linkedin)
                                    <li>
                                        <a href="{{ $settings->linkedin }}" target="_blank">
                                            <i class="ri-linkedin-box-fill"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($settings->twitter)
                                    <li>
                                        <a href="{{ $settings->twitter }}" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title" style="margin: -8px auto;">
                <h2>برای ما پیام فوری ارسال کنید</h2>
                <p>شما می توانید با استفاده از فرم زیر پیام را به صورت مستقیم برای مدیر ارسال کنید. پیام و اطلاعات شما محفوظ
                    بوده و
                    برای دیگران نمایش داده نمی شود.</p>
            </div>

            <section class="candidates-resume-area ptb-100">
                <div class="container">
                    <div class="candidates-resume-content">
                        <form class="resume-info" autocomplete="off" action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <span style="color:red">*</span>
                                        <label>نام و نام خانوادگی</label>
                                        <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}"
                                            class="form-control @error('full_name') is-invalid @enderror">
                                        @error('full_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <span style="color:red">*</span>
                                        <label>ایمیل</label>
                                        <input name="email" id="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <span style="color:red">*</span>
                                        <label>موبایل</label>
                                        <input type="text" name="phone_number" id="phone_number"
                                            value="{{ old('phone_number') }}"
                                            class="form-control @error('phone_number') is-invalid @enderror">
                                        @error('phone_number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>موضوع</label>
                                        <input type="text" name="msg_subject" id="msg_subject"
                                            value="{{ old('msg_subject') }}"
                                            class="form-control @error('msg_subject') is-invalid @enderror">
                                        @error('msg_subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <span style="color:red">*</span>
                                        <label>متن پیام</label>
                                        <textarea name="message" class="form-control justify @error('message') is-invalid @enderror" id="message"
                                            cols="30" rows="6">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        <span>ارسال پیام</span>
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
