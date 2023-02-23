<section class="events-area bg-color ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="events-content mr-15">
                    <span>رویدادها</span>
                    <h2>رویدادهای آینده</h2>

                    <ul class="events-list">
                        @foreach ($events as $event)
                            <li>
                                <div class="events-date">
                                    <span>{{ $event->date }}</span>
                                </div>

                                <span>{{ $event->event_category->title }}</span>
                                <h3>
                                    <a href="{{ route('events.show', ['event' => $event->id]) }}">
                                        {{ $event->title }}
                                    </a>
                                </h3>
                                <p class="justify">
                                    {!! Str::limit($event->description, 100, ' ...') !!}
                                </p>

                                <a href="{{ route('events.show', ['event' => $event->id]) }}" class="read-more">
                                    اطلاعات بیشتر
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="events-timer ml-15">
                    <div class="event-img">
                        <img src="assets/images/event-img.jpg" alt="Image">
                    </div>

                    <span>رویداد بعدی</span>

                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>

                    <button class="default-btn" disabled>
                        هم اکنون رزرو کنید
                        <i class="ri-arrow-left-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
