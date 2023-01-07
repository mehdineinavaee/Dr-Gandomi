@extends('layouts.app')
@section('title', 'صفحه اصلی یک')
@section('content')
    <!-- Start Form Area -->
    <section class="faq-contact-area pb-100 pt-70">
        <div class="container">
            <div class="contact-from-bg">
                <div class="section-title">
                    <h2>فرم صفحه اصلی یک</h2>
                </div>

                <div class="contact-form">
                    <form method="POST" action="{{ route('home_one.update', ['homeOne' => $homeOne->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="welcome" id="welcome" class="form-control"
                                        data-error="لطفاً پیام خوش آمدگویی را وارد کنید" placeholder="پیام خوش آمد گویی">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="slogen" id="slogen" class="form-control"
                                        data-error="لطفاً شعار را وارد کنید" placeholder="شعار">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="file" name="backgroundBanner" id="backgroundBanner"
                                        data-error="لطفاً تصویر زمینه را انتخاب کنید" class="form-control"
                                        placeholder="تصویر زمینه">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="file" name="banner" id="banner" class="form-control"
                                        data-error="لطفاً تصویر را انتخاب کنید" placeholder="تصویر">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                                        data-error="لطفاً لینکدین را وارد کنید" placeholder="لینکدین">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="twitter" id="twitter" class="form-control"
                                        data-error="لطفاً توییتر را وارد کنید" placeholder="توییتر">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="instagram" id="instagram" class="form-control"
                                        data-error="لطفاً اینستاگرام را وارد کنید" placeholder="اینستاگرام">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        data-error="لطفاً فیس بوک را وارد کنید" placeholder="فیس بوک">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    به روز رسانی
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
    <!-- End Form Area -->
@endsection
