@extends('layouts.app')
@section('title', 'صفحه 404')
@section('content')
    <!-- Start 404 Error -->
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content">
                    <h1>4 <span>0</span> 4</h1>
                    <h3>Oops! Page Not Found</h3>
                    <p>The page you were looking for could not be found.</p>

                    <a href="index.html" class="default-btn two">
                        Return To Home Page
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 Error -->
@endsection
