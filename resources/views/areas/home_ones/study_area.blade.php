<section class="study-area pt-100 pb-70"
    style="background-image: url('{{ asset('storage/settings/' . $settings->study) }}');">
    <div class="container">
        <div class="section-title white-title">
            <h2>فایل های دانشجو</h2>
            <p class="justify">
                دانشجویان می توانند دروس مورد نظر خود را انتخاب کرده و فایل های ارائه شده را دانلود کنند.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="study-slider owl-carousel owl-theme">
                @foreach ($studies as $study)
                    <div class="single-study">
                        <i class="flaticon-finance"></i>
                        <h3>
                            <a href={{ route('studies.show', ['study' => $study->id]) }}>{{ $study->title }}</a>
                        </h3>

                        <a href={{ route('studies.show', ['study' => $study->id]) }} class="read-more">
                            اطلاعات بیشتر
                            <span class="ri-arrow-left-line"></span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
