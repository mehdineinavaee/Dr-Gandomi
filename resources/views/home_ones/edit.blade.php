@extends('layouts.app')
@section('title', 'ویرایش صفحه اصلی')
@section('content')
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
                                <input type="text" name="welcome" id="welcome" class="form-control"
                                    value="{{ $home_one->welcome }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>شعار</label>
                                <input type="text" name="slogen" id="slogen" class="form-control"
                                    value="{{ $home_one->slogen }}">
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
