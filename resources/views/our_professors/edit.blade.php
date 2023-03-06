@extends('layouts.app')
@section('title', 'ویرایش استاد')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش استاد', 'url' => url()->current(), 'bg' => $settings->our_professors]],
    ])
    <section class="candidates-resume-area ptb-100">
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
                                <span style="color:red">*</span>
                                <label>نام و نام خانوادگی</label>
                                <input type="text" name="full_name" id="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ $ourProfessor->full_name }}">
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
                                <label>سمت</label>
                                <input type="text" name="post" id="post"
                                    class="form-control @error('post') is-invalid @enderror"
                                    value="{{ $ourProfessor->post }}">
                                @error('post')
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
                                    value="{{ $ourProfessor->twitter }}">
                                @error('twitter')
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
                                    value="{{ $ourProfessor->linkedin }}">
                                @error('linkedin')
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
                                    value="{{ $ourProfessor->instagram }}">
                                @error('instagram')
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
                                    value="{{ $ourProfessor->facebook }}">
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
