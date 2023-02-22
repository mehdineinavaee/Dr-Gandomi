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
                                <label>نام</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $publisher->name }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $publisher->address }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>صندوق پستی</label>
                                <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    value="{{ $publisher->postal_code }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="tell" id="tell" class="form-control"
                                    value="{{ $publisher->tell }}">
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
