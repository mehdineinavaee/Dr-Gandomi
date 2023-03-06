@extends('layouts.app')
@section('title', 'ویرایش انتشارات')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش انتشارات', 'url' => url()->current(), 'bg' => $settings->publishers]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('publishers.update', ['publisher' => $publisher->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>نام</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $publisher->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ $publisher->address }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>صندوق پستی</label>
                                <input type="text" name="postal_code" id="postal_code"
                                    class="form-control @error('postal_code') is-invalid @enderror"
                                    value="{{ $publisher->postal_code }}">
                                @error('postal_code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="tel" id="tel"
                                    class="form-control @error('tel') is-invalid @enderror" value="{{ $publisher->tel }}">
                                @error('tel')
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
