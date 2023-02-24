@extends('layouts.app')
@section('title', 'نویسنده جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن نویسنده', 'url' => url()->current(), 'bg' => $settings->authors]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('authors.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>نام</label>
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                                    class="form-control @error('first_name') is-invalid @enderror">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>نام خانوادگی</label>
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                                    class="form-control @error('last_name') is-invalid @enderror">
                                @error('last_name')
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
