@extends('layouts.app')
@section('title', 'دسته بندی جدید')
@section('content')
    <!-- Start Form Area -->
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('courses.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label>عنوان دسته بندی</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            ثبت
                        </button>
                    </div>

            </div>
            </form>
        </div>
        </div>
    </section>
    <!-- End Form Area -->
@endsection
