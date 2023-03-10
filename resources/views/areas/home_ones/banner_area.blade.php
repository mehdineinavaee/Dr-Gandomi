<section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}'
    style="background-image: url('{{ asset('storage/home_one/' . $home_ones->backgroundBanner) }}');">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span>{{ $home_ones->welcome }}</span>
                            <h1>{{ $home_ones->slogan }}</h1>

                            <div class="banner-btn">
                                <a href="{{ route('events.index') }}" class="default-btn">
                                    بررسی رویداد
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="{{ asset('storage/home_one/' . $home_ones->banner) }}"
                                alt="{{ $home_ones->welcome }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
