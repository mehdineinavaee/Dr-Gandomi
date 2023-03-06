@extends('layouts.app')
@section('title', 'ویرایش پرسش و پاسخ')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش پرسش و پاسخ', 'url' => url()->current(), 'bg' => $settings->faqs]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('faqs.update', ['faq' => $faq->id]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>پرسش</label>
                                <input type="text" name="question" id="question"
                                    class="form-control @error('question') is-invalid @enderror"
                                    value="{{ $faq->question }}">
                                @error('question')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>پاسخ</label>
                                <input type="text" name="response" id="response"
                                    class="form-control @error('response') is-invalid @enderror"
                                    value="{{ $faq->response }}">
                                @error('response')
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
