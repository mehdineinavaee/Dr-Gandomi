@extends('layouts.app')
@section('title', 'مدیریت پیام ها')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مدیریت پیام ها', 'url' => url()->current(), 'bg' => $settings->authors]],
    ])
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-dark mb-3">
                        <div class="card-header">مدیریت پیام ها</div>
                        <div class="card-body text-dark">
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; width:10%">ردیف</th>
                                            <th style="text-align:center;">نام و نام خانوادگی</th>
                                            <th style="text-align:center;">ایمیل</th>
                                            <th style="text-align:center;">همراه</th>
                                            <th style="text-align:center;">عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $contact->full_name }}</td>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $contact->email }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $contact->phone_number }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    <button value='/contact/{{ $contact->id }}'
                                                        class="btn btn-danger btn-sm delete">
                                                        <i class="ri-chat-delete-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="حذف">
                                                        </i>
                                                    </button>

                                                    <a href="{{ route('contact.show', ['contact' => $contact->id]) }}"
                                                        class="btn btn-info btn-sm" style="color: #fff">
                                                        <i class="ri-folder-info-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top"
                                                            title="مشاهده پیام">
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
