@extends('layouts.app')
@section('title', 'ویرایش صفحه اصلی')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش صفحه اصلی', 'url' => url()->current(), 'bg' => $settings->home_one]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" method="POST" action="{{ route('home_one.update', ['home_one' => $home_one->id]) }}"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر پشت زمینه (1920px&times;1080px)</label>
                                <input type="file" class="form-control" accept="image/jpg" id="backgroundBanner"
                                    name="backgroundBanner">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر زمینه (825px&times;830px)</label>
                                <input type="file" class="form-control" accept="image/*" id="banner" name="banner">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>پیام خوش آمد گویی</label>
                                <input type="text" name="welcome" id="welcome"
                                    class="form-control @error('welcome') is-invalid @enderror"
                                    value="{{ $home_one->welcome }}">
                                @error('welcome')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>شعار</label>
                                <input type="text" name="slogen" id="slogen"
                                    class="form-control @error('slogen') is-invalid @enderror"
                                    value="{{ $home_one->slogen }}">
                                @error('slogen')
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
