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

                                @if ($event->event_category)
                                    <span>{{ $event->event_category->title }}</span>
                                @endif

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

                    <span>زمان باقی مانده تا جدیدترین رویداد</span>

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

@push('js')
    <script>
        function makeTimer() {
            // var en = "1990/01/21";
            // console.log(moment(en, "YYYY/MM/DD").locale("fa").format("YYYY/MM/DD")); // 1368/11/01
            // console.log(moment(en, "YYYY/MM/DD").locale("fa").format("YYYY")); // 1368
            // console.log(moment(en, "YYYY/MM/DD").locale("fa").format("MM")); // 11
            // console.log(moment(en, "YYYY/MM/DD").locale("fa").format("MMM")); // بهمن
            // console.log(moment(en, "YYYY/MM/DD").locale("fa").format("DD")); // 01

            // var fa = "1368/11/01";
            // console.log(
            //   moment.from(fa, "fa", "YYYY/MM/DD").locale("en").format("YYYY/MM/DD")
            // ); // 1990/01/21
            // console.log(
            //   moment.from(fa, "fa", "YYYY/MM/DD").locale("en").format("YYYY")
            // ); // 1990
            // console.log(moment.from(fa, "fa", "YYYY/MM/DD").locale("en").format("MM")); // 01
            // console.log(moment.from(fa, "fa", "YYYY/MM/DD").locale("en").format("MMM")); // January
            // console.log(moment.from(fa, "fa", "YYYY/MM/DD").locale("en").format("DD")); // 21

            var myDate = "{{ $date }}";
            var myHour = "{{ $hour }}";
            var myMonth = moment.from(myDate, "fa", "YYYY/MM/DD").locale("en").format("MMM");
            var myDay = moment.from(myDate, "fa", "YYYY/MM/DD").locale("en").format("DD");
            var myYear = moment.from(myDate, "fa", "YYYY/MM/DD").locale("en").format("YYYY");

            // var myMonth = "november";
            // var myDay = "30";
            // var myYear = "2023";
            // var myHour = "17:00:00";

            var endTime = new Date(
                myMonth + " " + myDay + ", " + myYear + " " + myHour
            );
            var endTime = Date.parse(endTime) / 1000;
            var now = new Date();
            var now = Date.parse(now) / 1000;
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - days * 86400) / 3600);
            var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
            var seconds = Math.floor(
                timeLeft - days * 86400 - hours * 3600 - minutes * 60
            );
            if (hours < "10") {
                hours = "0" + hours;
            }
            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }
            $("#days").html(days + "<span>روز</span>");
            $("#hours").html(hours + "<span>ساعت</span>");
            $("#minutes").html(minutes + "<span>دقیقه</span>");
            $("#seconds").html(seconds + "<span>ثانیه</span>");
        }
        setInterval(function() {
            makeTimer();
        }, 300);
    </script>
@endpush
