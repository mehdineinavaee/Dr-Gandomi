<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.css')
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body>
    {{-- @include('layouts.preloader') --}}
    @include('layouts.header')
    @include('layouts.search_modal')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.copy_right')
    @include('layouts.go_top')
    @include('layouts.scripts')
</body>

</html>
