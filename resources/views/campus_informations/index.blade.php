@extends('layouts.app')
@section('title', 'اطلاعات دانشگاه')
@section('content')
    <!-- Start Page Title Area -->
    @include('common.breadcrumbs', [
        'data' => [['title' => 'اطلاعات دانشگاه', 'url' => url()->current()]],
    ])
    <!-- End Page Title Area -->

    <!-- Start Campus information Area -->
    <section class="campus-information-area ptb-100">
        <div class="container">
            <div class="main-default-content">
                <h3>درباره دانشگاه</h3>
                <p class="justify">Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing
                    elit. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus
                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula.</p>

                <p class="justify">Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur aliquet
                    quam id dui
                    posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac
                    diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit.luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                    vel, ullamcorper sit amet ligula Vestibulum ac diam sit amet quam vehicula elementum sed justo, lacinia
                    eget.</p>

                <div class="gap-20"></div>
                <img src="assets/images/campus-information-img.jpg" alt="Image">
                <div class="gap-20"></div>

                <h4>امکانات دانشگاه</h4>
                <p class="justify">Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing
                    elit. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus
                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam
                    id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui</p>

                <ul>
                    <li>Silent study area</li>
                    <li>Student Room</li>
                    <li>Cafe area</li>
                </ul>
                <ul class="gap-ml-50">
                    <li>Computer suites</li>
                    <li>Library</li>
                    <li>Parking facilities</li>
                </ul>

                <div class="gap-20"></div>

                <h4>دیگر اطلاعات دانشگاه</h4>
                <p class="justify">Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing
                    elit. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus
                    et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
                    ligula. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam
                    id dui posuere blandit.</p>

                <ul>
                    <li>Annual security report</li>
                    <li>ID badges</li>
                    <li>Room reservations</li>
                </ul>
                <ul class="gap-ml-50">
                    <li>Emergency procedures</li>
                    <li>Lab hours</li>
                    <li>Building maps</li>
                </ul>

            </div>
        </div>
    </section>
    <!-- End Campus information Area -->
@endsection
