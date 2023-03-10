@extends('layouts.app')
@section('title', 'تنظیمات')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'تنظیمات', 'url' => url()->current(), 'bg' => $settings->settings]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('settings.update', ['setting' => $setting->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <h3>سربرگ</h3>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>موبایل</label>
                                <input type="text" name="phone_number" id="phone_number"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ $setting->phone_number }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لوگو (157px&times;48px)</label>
                                <input type="file" class="form-control" accept="image/*" id="logo" name="logo">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لوگوی محبوب (16px&times;16px)</label>
                                <input type="file" class="form-control" accept="image/*" id="favicon" name="favicon">
                            </div>
                        </div>

                        <h3>پاورقی</h3>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ $setting->address }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ $setting->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="tel" id="tel"
                                    class="form-control @error('tel') is-invalid @enderror" value="{{ $setting->tel }}">
                                @error('tel')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="footer_description" id="footer_description" class="@error('footer_description') is-invalid @enderror">{{ $setting->footer_description }}</textarea>
                                @error('footer_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>فیس بوک</label>
                                <input type="text" name="facebook" id="facebook"
                                    class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ $setting->facebook }}">
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>اینستاگرام</label>
                                <input type="text" name="instagram" id="instagram"
                                    class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ $setting->instagram }}">
                                @error('instagram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لینکدین</label>
                                <input type="text" name="linkedin" id="linkedin"
                                    class="form-control @error('linkedin') is-invalid @enderror"
                                    value="{{ $setting->linkedin }}">
                                @error('linkedin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>توییتر</label>
                                <input type="text" name="twitter" id="twitter"
                                    class="form-control @error('twitter') is-invalid @enderror"
                                    value="{{ $setting->twitter }}">
                                @error('twitter')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <h3>تماس با ما</h3>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لینک گوگل مپ</label>
                                <input type="text" name="google_map_area" id="google_map_area"
                                    class="form-control @error('google_map_area') is-invalid @enderror"
                                    value="{{ $setting->google_map_area }}">
                                @error('google_map_area')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <h3>پشت زمینه عناوین صفحات</h3>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>دوره ها (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="courses"
                                    name="courses">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>بلاگ (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="blog"
                                    name="blog">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>اساتید (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="our_professors"
                                    name="our_professors">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>پرسش و پاسخ (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="faqs"
                                    name="faqs">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>گالری (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="gallery"
                                    name="gallery">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>حساب من (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="my_account"
                                    name="my_account">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>رویدادها (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="events"
                                    name="events">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>جزئیات رویداد (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="event_details"
                                    name="event_details">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>محصولات (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="products"
                                    name="products">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>کارت (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cart"
                                    name="cart">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تماس با ما (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="contact"
                                    name="contact">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تنظیمات (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="settings"
                                    name="settings">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>صفحه اصلی (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="home_one"
                                    name="home_one">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>دسته بندی ها (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="categories"
                                    name="categories">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>روش برگزاری (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="modes"
                                    name="modes">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>انتشارات (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="publishers"
                                    name="publishers">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>نویسنده ها (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="authors"
                                    name="authors">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>مترجمان (1920px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="translators"
                                    name="translators">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>فایل های دانشجو (1920px&times;857px)</label>
                                <input type="file" class="form-control" accept="image/*" id="study"
                                    name="study">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            ثبت
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
