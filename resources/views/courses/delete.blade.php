<!-- Delete Course Modal -->
<div class="modal fade" id="delete_course_modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">حذف دوره</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: center">
                <h6>آیا از حذف دوره اطمینان دارید؟</h6>
                <p>با کلیک روی دکمه "موافقم" امکان بازگشت وجود ندارد.</p>
            </div>
            <div class="modal-footer">
                <div class="col-lg-12 col-md-12">
                    <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="default-btn" type="submit">موافقم</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End- Delete Course Modal -->
