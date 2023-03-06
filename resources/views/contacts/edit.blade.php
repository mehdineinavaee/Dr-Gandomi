@extends('layouts.app')
@section('title', 'ویرایش تماس با ما')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش تماس با ما', 'url' => url()->current(), 'bg' => $settings->contact]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>آدرس</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $contact->address }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>ایمیل</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $contact->email }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تلفن</label>
                                <input type="text" name="tel" id="tel" class="form-control"
                                    value="{{ $contact->tel }}">
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
