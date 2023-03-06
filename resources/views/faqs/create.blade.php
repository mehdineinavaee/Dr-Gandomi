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
                                <span style="color:red">*</span>
                                <label>پرسش</label>
                                <input type="text" name="question" id="question"
                                    class="form-control @error('question') is-invalid @enderror"
                                    value="{{ old('question') }}" />
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
                                    value="{{ old('response') }}" />
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
