@extends('layouts.app')
@section('title', 'دوره جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن دوره', 'url' => url()->current(), 'bg' => $settings->courses]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('courses.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
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

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر (860px&times;500px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select id="categories" name="categories" placeholder="دسته بندی را انتخاب کنید"
                                    data-search="true" data-silent-initial-value-set="true" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('categories') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>روش برگزاری</label>
                                <select id="mode" name="mode" class="form-control">
                                    <option value="" selected>روش برگزاری را انتخاب کنید
                                    </option>
                                    @foreach ($modes as $mode)
                                        <option value="{{ $mode->id }}"
                                            {{ old('mode') == $mode->id ? 'selected' : '' }}>
                                            {{ $mode->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>مدت</label>
                                <input type="text" name="duration" id="duration" value="{{ old('duration') }}"
                                    class="form-control @error('duration') is-invalid @enderror">
                                @error('duration')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ شروع</label>
                                <input type="text" name="start_dates" id="start_dates" value="{{ old('start_dates') }}"
                                    class="form-control @error('start_dates') is-invalid @enderror">
                                @error('start_dates')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>هزینه</label>
                                <input type="text" name="fee" id="fee" value="{{ old('fee') }}"
                                    class="form-control @error('fee') is-invalid @enderror"
                                    onkeyup="separateNum(this.value,this,'createNumToLetter');">
                                {{-- name id div (numToLetter) nabayad hamnam id input (fee) bashad --}}
                                <div id="createNumToLetter" style="text-align: justify">
                                </div>
                                @error('fee')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>زبان</label>
                                <input type="text" name="language" id="language" value="{{ old('language') }}"
                                    class="form-control @error('language') is-invalid @enderror">
                                @error('language')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تعداد صندلی فعال</label>
                                <input type="text" name="seats_available" id="seats_available"
                                    value="{{ old('seats_available') }}"
                                    class="form-control @error('seats_available') is-invalid @enderror">
                                @error('seats_available')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="description" id="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
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
