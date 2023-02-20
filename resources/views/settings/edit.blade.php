@extends('layouts.app')
@section('title', 'تنظیمات')
@section('content')
    <section class="candidates-resume-area ptb-50">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('settings.update', ['setting' => $setting->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>موبایل</label>
                                <input type="text" name="tel" id="tel" class="form-control"
                                    value="{{ $setting->tel }}">
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

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $setting->address }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $setting->email }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ $setting->phone }}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات در پاورقی</label>
                                <textarea name="footer_description" id="footer_description">{{ $setting->footer_description }}</textarea>
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
