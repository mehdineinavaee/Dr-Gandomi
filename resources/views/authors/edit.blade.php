@extends('layouts.app')
@section('title', 'ویرایش نویسنده')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش نویسنده', 'url' => url()->current(), 'bg' => $settings->authors]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('authors.update', ['author' => $author->id]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    value="{{ $author->first_name }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>نام خانوادگی</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    value="{{ $author->last_name }}">
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
