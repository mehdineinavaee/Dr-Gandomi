@extends('layouts.app')
@section('title', 'صفحه 404')
@section('content')
    <!-- Start 404 Error -->
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>0</span> 4</h1>
                    <h3>متأسفانه! صفحه یافت نشد</h3>
                    <p>صفحه ای که به دنبال آن هستید پیدا نشد</p>

                    <a href="/" class="default-btn two">
                        بازگشت به صفحه اصلی
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 Error -->
@endsection
