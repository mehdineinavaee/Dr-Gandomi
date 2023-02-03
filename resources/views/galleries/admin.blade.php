@extends('layouts.app')
@section('title', 'مدیریت گالری')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'مدیریت گالری', 'url' => url()->current()]],
    ])
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-dark mb-3">
                        <div class="card-header">مدیریت گالری</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">
                                <a href="{{ route('gallery.create') }}">
                                    <i class="ri-add-circle-fill" style="font-size: 2rem" data-toggle="tooltip"
                                        data-placement="top" title="افزودن تصویر جدید"></i>
                                </a>
                            </h5>
                            <p class="card-text">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; width:10%">ردیف</th>
                                            <th style="text-align:center; width:60%">تصویر</th>
                                            <th style="text-align:center; width:20%">عملیات</th>
                                            <th style="text-align:center; width:10%">
                                                <input type="checkbox" id="checkall" name="checkall" value="">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td style="text-align:center;" class="align-middle">{{ $loop->iteration }}
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    <img src="{{ asset('storage/galleries/' . $gallery->cover) }}"
                                                        alt="Image"
                                                        style="width:150px; height:150px; border-radius:10px">
                                                </td>
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

                                                    <button value='/gallery/{{ $gallery->id }}'
                                                        class="btn btn-danger btn-sm delete">
                                                        <i class="ri-chat-delete-fill" data-toggle="tooltip"
                                                            style="font-size: 1rem" data-placement="top" title="حذف">
                                                        </i>
                                                    </button>
                                                </td>
                                                <td style="text-align:center;" class="align-middle">
                                                    <input type="checkbox" form="frmDeleteAll" class="checkbox"
                                                        id="case" name="case[]" value="{{ $gallery->id }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3">
                                                مواردی که می خواهید را انتخاب کرده و روی دکمه حذف کلیک کنید
                                            </td>
                                            <td style="text-align:center;">
                                                <form action="{{ route('gallery.deleteSelectedItems') }}" id="frmDeleteAll"
                                                    method="post">
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger delete_selected_item"
                                                        id="deleteRows" name="deleteRows" value="حذف">
                                                </form>
                                            </td>
                                        </tr>
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
        $('.delete_selected_item').click(function() {
            if (confirm("آیا از حذف موارد انتخابی اطمینان دارید؟")) {
                $(this).find('form').submit();
            } else {
                return false;
            }
        });

        $(document).ready(function() {
            // Check or Uncheck All checkboxes
            $("#checkall").change(function() {
                var checked = $(this).is(':checked');
                if (checked) {
                    $(".checkbox").each(function() {
                        $(this).prop("checked", true);
                    });
                } else {
                    $(".checkbox").each(function() {
                        $(this).prop("checked", false);
                    });
                }
            });

            // Changing state of CheckAll checkbox 
            $(".checkbox").click(function() {

                if ($(".checkbox").length == $(".checkbox:checked").length) {
                    $("#checkall").prop("checked", true);
                } else {
                    $("#checkall").removeAttr("checked");
                }

            });
        });
    </script>
@endpush
