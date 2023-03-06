@extends('layouts.app')
@section('title', 'استاد جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن استاد', 'url' => url()->current(), 'bg' => $settings->our_professors]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('our_professors.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

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
                                <label>سمت</label>
                                <input type="text" name="post" id="post" value="{{ old('post') }}"
                                    class="form-control @error('post') is-invalid @enderror">
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
                                <input type="text" name="twitter" id="twitter" value="{{ old('twitter') }}"
                                    class="form-control @error('twitter') is-invalid @enderror">
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
                                <input type="text" name="linkedin" id="linkedin" value="{{ old('linkedin') }}"
                                    class="form-control @error('linkedin') is-invalid @enderror">
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
                                <input type="text" name="instagram" id="instagram" value="{{ old('instagram') }}"
                                    class="form-control @error('instagram') is-invalid @enderror">
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
                                <input type="text" name="facebook" id="facebook" value="{{ old('facebook') }}"
                                    class="form-control @error('facebook') is-invalid @enderror">
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
