@extends('layouts.app')
@section('title', 'ویرایش دروس')
@section('content')
    <!-- Start Form Area -->
    <section class="faq-contact-area pb-100 pt-70">
        <div class="container">
            <div class="contact-from-bg">
                <div class="section-title">
                    <h2>ویرایش درس</h2>
                </div>

                <div class="contact-form">
                    <form action="{{ route('courses.update', ['course' => $course->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="cover" name="cover">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $course->title }}" data-error="لطفاً عنوان را وارد کنید"
                                        placeholder="عنوان">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="description" id="description" class="form-control"
                                        value="{{ $course->description }}" data-error="لطفاً توضیحات را وارد کنید"
                                        placeholder="توضیحات">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    ثبت
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
