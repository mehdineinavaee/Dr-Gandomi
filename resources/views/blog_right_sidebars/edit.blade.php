@extends('layouts.app')
@section('title', 'ویرایش بلاگ')
@section('content')
    <section class="candidates-resume-area ptb-50">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('blog_right_sidebars.update', ['blog_right_sidebar' => $blogRightSidebar->id]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر (860px&times;500px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $blogRightSidebar->title }}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="description" id="description">{{ $blogRightSidebar->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تگ ها</label>
                                <input type="text" name="tags" id="tags" class="form-control"
                                    value="{{ $blogRightSidebar->tags }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ</label>
                                <input type="text" name="date" id="date" class="form-control"
                                    value="{{ $blogRightSidebar->date }}">
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
