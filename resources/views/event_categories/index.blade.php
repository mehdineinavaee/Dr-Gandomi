@extends('layouts.app')
@section('title', 'مدیریت دسته بندی ها')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مدیریت دسته بندی', 'url' => url()->current(), 'bg' => $settings->categories]],
    ])
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-dark mb-3">
                        <div class="card-header">مدیریت دسته بندی ها</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">
                                <a href="{{ route('event_categories.create') }}">
                                    <i class="ri-add-circle-fill" style="font-size: 2rem" data-toggle="tooltip"
                                        data-placement="top" title="افزودن دسته بندی جدید"></i>
                                </a>
                            </h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; width:10%">ردیف</th>
                                            <th style="text-align:center; width:70%">عنوان</th>
                                            <th style="text-align:center; width:20%">عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($event_categories as $event_category)
                                            <tr>
                                                <td style="text-align:center;" class="align-middle">{{ $loop->iteration }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    {{ $event_category->title }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">

                                                    {{-- <form action="{{ route('categories.destroy', ['event_category' => $event_category->id]) }}"
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

                                                    <button value='/event_categories/{{ $event_category->id }}'
                                                        class="btn btn-danger btn-sm delete">
                                                        <i class="ri-chat-delete-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="حذف">
                                                        </i>
                                                    </button>

                                                    <a href="{{ route('categories.edit', ['event_category' => $event_category->id]) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="ri-edit-2-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="ویرایش">
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
