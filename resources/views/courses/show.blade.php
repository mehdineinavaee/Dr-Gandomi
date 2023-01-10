@extends('layouts.app')
@section('title', 'مشاهده درس')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col form-group rightAlign">
                <div dir="rtl" class="Vazir">
                    نام: {{ $course->cover }}
                    <br>
                    نام میانی: {{ $course->title }}
                    <br>
                    نام خانوادگی: {{ $course->description }}
                </div>
            </div>
        </div>
    </div>
@endsection
