@extends('layouts.app')
@section('title', 'پرسش و پاسخ جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن پرسش و پاسخ', 'url' => url()->current(), 'bg' => $settings->faqs]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('faqs.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>پرسش</label>
                                <input type="text" name="question" id="question" class="form-control" cols="30"
                                    rows="5" />
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>پاسخ</label>
                                <input type="text" name="response" id="response" class="form-control" cols="30"
                                    rows="5" />
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
