@extends('layouts.app')
@section('title', 'مدیریت دوره ها')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مدیریت دوره ها', 'url' => url()->current(), 'bg' => $settings->courses]],
    ])
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-dark mb-3">
                        <div class="card-header">مدیریت دوره ها</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">
                                <a href="{{ route('courses.create') }}">
                                    <i class="ri-add-circle-fill" style="font-size: 2rem" data-toggle="tooltip"
                                        data-placement="top" title="افزودن دوره جدید"></i>
                                </a>
                            </h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;">ردیف</th>
                                            <th style="text-align:center;">عنوان</th>
                                            <th style="text-align:center;">روش برگزاری</th>
                                            <th style="text-align:center;">مدت</th>
                                            <th style="text-align:center;">تاریخ شروع</th>
                                            <th style="text-align:center;">هزینه</th>
                                            <th style="text-align:center;">زبان</th>
                                            <th style="text-align:center;">تعداد صندلی فعال</th>
                                            <th style="text-align:center;">عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $course->title }}
                                                </td>
                                                @if ($course->mode_id)
                                                    <td style="text-align:center;" class="align-middle">
                                                        {{ $course->mode->title }}
                                                    </td>
                                                @else
                                                    <td style="text-align:center;" class="align-middle">
                                                        NULL
                                                    </td>
                                                @endif
                                                @if ($course->duration)
                                                    <td style="text-align:center;" class="align-middle">
                                                        {{ $course->duration }}
                                                    </td>
                                                @else
                                                    <td style="text-align:center;" class="align-middle">
                                                        NULL
                                                    </td>
                                                @endif
                                                @if ($course->start_dates)
                                                    <td style="text-align:center;" class="align-middle">
                                                        {{ $course->start_dates }}
                                                    </td>
                                                @else
                                                    <td style="text-align:center;" class="align-middle">
                                                        NULL
                                                    </td>
                                                @endif
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ number_format($course->fee) }} تومان
                                                </td>
                                                @if ($course->language)
                                                    <td style="text-align:center;" class="align-middle">
                                                        {{ $course->language }}
                                                    </td>
                                                @else
                                                    <td style="text-align:center;" class="align-middle">
                                                        NULL
                                                    </td>
                                                @endif
                                                @if ($course->seats_available)
                                                    <td style="text-align:center;" class="align-middle">
                                                        {{ $course->seats_available }}
                                                    </td>
                                                @else
                                                    <td style="text-align:center;" class="align-middle">
                                                        NULL
                                                    </td>
                                                @endif
                                                <td style="text-align:center;" class="align-middle">

                                                    {{-- <form action="{{ route('courses.destroy', ['course' => $course->id]) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" href="javascript:void(0)"
                                                            class="btn btn-sm btn-danger">
                                                            <i class="ri-chat-delete-fill" data-toggle="tooltip"
                                                                style="font-size: 1.3rem" data-placement="top"
                                                                title="حذف">
                                                            </i>
                                                        </button>
                                                    </form> --}}

                                                    <button value='/courses/{{ $course->id }}'
                                                        class="btn btn-danger btn-sm delete">
                                                        <i class="ri-chat-delete-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="حذف">
                                                        </i>
                                                    </button>

                                                    <a href="{{ route('courses.edit', ['course' => $course->id]) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="ri-edit-2-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="ویرایش">
                                                        </i>
                                                    </a>

                                                    <a href="{{ route('courses.show', ['course' => $course->id]) }}"
                                                        class="btn btn-info btn-sm" style="color: #fff">
                                                        <i class="ri-folder-info-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top"
                                                            title="مشاهده جزئیات">
                                                        </i>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('common.delete')
@endsection

@push('js')
    <script>
        $(function() {
            $('#example').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "داده ای وجود ندارد",
                    "info": "نمایش _START_ تا _END_ از _TOTAL_ ردیف",
                    "infoEmpty": "نمایش 0 تا 0 از 0 ردیف",
                    "infoFiltered": "(مجموع رکوردها _MAX_)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "نمایش _MENU_ ردیف",
                    "loadingRecords": "در حال بارگزاری ... ",
                    "processing": "در حال پردازش ... ",
                    "search": "جستجو ",
                    "zeroRecords": "هیچ رکوردی یافت نشد",
                    "paginate": {
                        "first": "ابتدا",
                        "last": "انتها",
                        "next": "بعدی",
                        "previous": "قبلی"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
            $('[data-toggle=tooltip]').tooltip();
        });
    </script>
@endpush
