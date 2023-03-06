@extends('layouts.app')
@section('title', 'ویرایش رویداد')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'ویرایش رویداد', 'url' => url()->current(), 'bg' => $settings->events]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('events.update', ['event' => $event->id]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر سخنران (860px&times;600px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>سخنران</label>
                                <input type="text" name="full_name" id="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ $event->full_name }}">
                                @error('full_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>تاریخ</label>
                                <input type="text" name="date" id="date"
                                    class="form-control @error('date') is-invalid @enderror" value="{{ $event->date }}">
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>روز</label>
                                <input type="text" name="day" id="day"
                                    class="form-control @error('day') is-invalid @enderror" value="{{ $event->day }}">
                                @error('day')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>ساعت برگزاری</label>
                                <input type="text" name="hour" id="hour"
                                    class="form-control @error('hour') is-invalid @enderror" value="{{ $event->hour }}">
                                @error('hour')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>مکان</label>
                                <input type="text" name="location" id="location"
                                    class="form-control @error('location') is-invalid @enderror"
                                    value="{{ $event->location }}">
                                @error('location')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>عنوان</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ $event->title }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>توضیحات</label>
                                <textarea name="description" id="description" class="@error('description') is-invalid @enderror">{{ $event->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>استاد راهنما</label>
                                <select id="supervisor" name="supervisor" class="form-control">
                                    <option value="" selected>استاد راهنما را انتخاب کنید
                                    </option>
                                    @foreach ($our_professors as $our_professor)
                                        <option value="{{ $our_professor->id }}"
                                            @if ($event->supervisor->id === $our_professor->id) selected @endif>
                                            {{ $our_professor->full_name }}
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
                                        <option value="{{ $our_professor->id }}"
                                            @if ($event->advisor->id === $our_professor->id) selected @endif>
                                            {{ $our_professor->full_name }}
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
                                        <option value="{{ $our_professor->id }}"
                                            @if ($event->referee->id === $our_professor->id) selected @endif>
                                            {{ $our_professor->full_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>دسته بندی</label>
                                <select id="event_category" name="event_category" class="form-control">
                                    <option value="" selected>دسته بندی را انتخاب کنید
                                    </option>
                                    @foreach ($event_categories as $event_category)
                                        <option value="{{ $event_category->id }}"
                                            @if ($event->event_category->id === $event_category->id) selected @endif>
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
