@extends('layouts.app')
@section('title', 'ویرایش استاد')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش استاد', 'url' => url()->current(), 'bg' => $settings->our_professors]],
    ])
    <section class="candidates-resume-area ptb-50">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('our_professors.update', ['our_professor' => $ourProfessor->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر (555px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>نام و نام خانوادگی</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $ourProfessor->name }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>سمت</label>
                                <input type="text" name="post" id="post" class="form-control"
                                    value="{{ $ourProfessor->post }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>توییتر</label>
                                <input type="text" name="twitter" id="twitter" class="form-control"
                                    value="{{ $ourProfessor->twitter }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>لینکدین</label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control"
                                    value="{{ $ourProfessor->linkedin }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>اینستاگرام</label>
                                <input type="text" name="instagram" id="instagram" class="form-control"
                                    value="{{ $ourProfessor->instagram }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>فیس بوک</label>
                                <input type="text" name="facebook" id="facebook" class="form-control"
                                    value="{{ $ourProfessor->facebook }}">
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
