@extends('layouts.app')
@section('title', 'ویرایش تماس با ما')
@section('content')
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لینک گوگل مپ</label>
                                <input type="text" name="google_map_area" id="google_map_area" class="form-control"
                                    value="{{ $contact->google_map_area }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $contact->address }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $contact->email }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="tell" id="tell" class="form-control"
                                    value="{{ $contact->tell }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>فیس بوک</label>
                                <input type="text" name="facebook" id="facebook" class="form-control"
                                    value="{{ $contact->facebook }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>اینستاگرام</label>
                                <input type="text" name="instagram" id="instagram" class="form-control"
                                    value="{{ $contact->instagram }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لینکدین</label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control"
                                    value="{{ $contact->linkedin }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>توییتر</label>
                                <input type="text" name="twitter" id="twitter" class="form-control"
                                    value="{{ $contact->twitter }}">
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
