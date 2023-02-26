<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>اخبار دانشگاهیان</h2>
            <p>جدیدترین اخبار را دنبال کنید</p>
        </div>

        <div class="row justify-content-md-center">
            @foreach ($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="{{ route('blog_right_sidebars.show', ['blog_right_sidebar' => $item->id]) }}"
                            class="blog-img">
                            <img src="{{ asset('storage/blog_right_sidebars/' . $item->cover) }}"
                                alt="{{ $item->title }}">
                            <span>دانشگاهی</span>
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="ri-calendar-line"></i>
                                    <span>{{ $item->date }}</span>
                                </li>
                            </ul>

                            <h3>
                                <a href="{{ route('blog_right_sidebars.show', ['blog_right_sidebar' => $item->id]) }}">
                                    {{ $item->title }}
                                </a>
                            </h3>

                            <p class="justify">
                                {!! $item->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
