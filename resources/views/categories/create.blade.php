@extends('layouts.app')
@section('title', 'دسته بندی جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن دسته بندی', 'url' => url()->current(), 'bg' => $settings->categories]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('categories.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>عنوان</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror">
                                @error('title')
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
