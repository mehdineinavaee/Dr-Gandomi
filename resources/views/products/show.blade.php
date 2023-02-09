@extends('layouts.app')
@section('title', 'مشاهده محصول')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مشاهده محصول', 'url' => url()->current()]],
    ])
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span>8</span>
                </div>

                <div class="col-lg-4">
                    <span>4</span>
                </div>
            </div>
        </div>
    </section>
@endsection
