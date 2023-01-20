@extends('layouts.app')
@section('title', 'مدیریت دسته بندی ها')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مدیریت دسته بندی ها', 'url' => url()->current()]],
    ])
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-dark mb-3">
                        <div class="card-header">مدیریت دسته بندی ها</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">
                                <a href="{{ route('categories.create') }}" data-bs-toggle="modal"
                                    data-bs-target="#AddCategoryModal">
                                    <i class="ri-add-circle-fill" style="font-size: 2rem" data-toggle="tooltip"
                                        data-placement="top" title="افزودن دسته بندی جدید"></i>
                                </a>
                            </h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>عنوان</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td style="text-align:center;">{{ $loop->iteration }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>
                                                    <button value={{ $category->id }}>
                                                        <i class="ri-chat-delete-fill" id="delete_category"
                                                            data-toggle="tooltip" style="font-size: 1.3rem"
                                                            data-placement="top" title="حذف">
                                                        </i>
                                                    </button>

                                                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}">
                                                        <i class="ri-edit-2-fill" data-toggle="tooltip"
                                                            style="font-size: 1.3rem" data-placement="top" title="ویرایش">
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
    @include('categories.create')
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
