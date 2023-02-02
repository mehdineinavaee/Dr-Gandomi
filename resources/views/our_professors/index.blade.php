@extends('layouts.app')
@section('title', 'اساتید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'اساتید', 'url' => url()->current()]],
    ])

    <!-- Start Team Area -->
    <section class="team-area-three ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>اساتید</h2>
                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, asperiores tempore voluptas,
                    labore maxime nam necessitatibus impedit quos aut suscipit voluptatem officiis? Quod exercitationem
                    ipsum repellat perferendis non tempora nulla?</p>
            </div>

            <div class="row justify-content-md-center">
                @foreach ($ourProfessors as $ourProfessor)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-member">
                            <img src="{{ asset('storage/our_professors/' . $ourProfessor->cover) }}"
                                alt="{{ $ourProfessor->title }}">

                            <div class="team-content">
                                <div class="team-social">
                                    <a href="javascript:void(0)" class="control">
                                        <i class="ri-share-fill"></i>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="{{ $ourProfessor->facebook }}" target="_blank">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $ourProfessor->instagram }}" target="_blank">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $ourProfessor->linkedin }}" target="_blank">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $ourProfessor->twitter }}" target="_blank">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="team-name">
                                    <h3>{{ $ourProfessor->name }}</h3>
                                    <span>{{ $ourProfessor->post }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $ourProfessors->links('common.pagination-links') }}
            </div>
        </div>
    </section>
    <!-- End Team Area -->
@endsection
