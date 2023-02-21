<!-- Start Page Title Area -->
<div class="page-title-area bg-27" style="background-image: url('{{ asset('storage/settings/' . $data[0]['bg']) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $data[0]['title'] }}</h2>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        صفحه اصلی
                        @if (isset($data))
                            <span class="fa fa-angle-left"></span>
                        @endif
                    </a>
                </li>
                @if (isset($data) && is_array($data))
                    @foreach ($data as $key => $value)
                        <li>
                            <a href="{{ $value['url'] }}">{{ $value['title'] }}</a>
                            @if ($key != sizeof($data) - 1 || isset($_GET['trashed']))
                                <span class="fa fa-angle-left"></span>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
