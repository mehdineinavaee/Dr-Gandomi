@extends('layouts.app')
@section('title', 'رویداد جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن رویداد', 'url' => url()->current(), 'bg' => $settings->events]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('events.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر سخنران (860px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>سخنران</label>
                                <input type="text" name="full_name" id="full_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ</label>
                                <input type="text" name="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>روز</label>
                                <input type="text" name="day" id="day" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>ساعت</label>
                                <input type="text" name="hour" id="hour" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>مکان</label>
                                <input type="text" name="location" id="location" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="description" id="description"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>استاد راهنما</label>
                                <select id="supervisor" name="supervisor" class="form-control">
                                    <option value="" selected>استاد راهنما را انتخاب کنید
                                    </option>
                                    @foreach ($our_professors as $our_professor)
                                        <option value="{{ $our_professor->id }}">
                                            {{ $our_professor->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>استاد مشاور</label>
                                <select id="advisor" name="advisor" class="form-control">
                                    <option value="" selected>استاد مشاور را انتخاب کنید
                                    </option>
                                    @foreach ($our_professors as $our_professor)
                                        <option value="{{ $our_professor->id }}">
                                            {{ $our_professor->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>داور</label>
                                <select id="referee" name="referee" class="form-control">
                                    <option value="" selected>داور را انتخاب کنید
                                    </option>
                                    @foreach ($our_professors as $our_professor)
                                        <option value="{{ $our_professor->id }}">
                                            {{ $our_professor->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ شروع</label>
                                <input type="text" name="start" id="start" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تاریخ پایان</label>
                                <input type="text" name="end" id="end" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select id="event_category" name="event_category" class="form-control">
                                    <option value="" selected>دسته بندی را انتخاب کنید
                                    </option>
                                    @foreach ($event_categories as $event_category)
                                        <option value="{{ $event_category->id }}">
                                            {{ $event_category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
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
