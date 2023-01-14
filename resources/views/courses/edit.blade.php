    <!-- Edit Course Modal -->
    <div class="modal fade" id="edit_course_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="candidates-resume-area ptb-50">
                    <div class="container">
                        <div class="candidates-resume-content">
                            <form class="resume-info" autocomplete="off"
                                action="{{ route('courses.update', ['course' => $course->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="modal-header">
                                    <h5 class="modal-title">ویرایش دوره</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>عنوان</label>
                                                <input type="text" name="title" id="title" class="form-control"
                                                    value="{{ $course->title }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>تصویر (860px&times;500px)</label>
                                                <input type="file" class="form-control" accept="image/*"
                                                    id="cover" name="cover">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>دسته بندی</label><br />
                                                <select id="categories" name="categories"
                                                    placeholder="دسته بندی را انتخاب کنید" data-search="true"
                                                    data-silent-initial-value-set="true" multiple>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if ($course->categories->pluck('id')->search($category->id) !== false) selected @endif>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>روش برگزاری کلاس</label>
                                                <select id="mode" name="mode" class="form-control">
                                                    <option value="" selected>روش برگزاری کلاس را انتخاب کنید
                                                    </option>
                                                    @foreach ($modes as $mode)
                                                        <option value="{{ $mode->id }}"
                                                            @if ($course->mode->id === $mode->id) selected @endif>
                                                            {{ $mode->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>مدت دوره</label>
                                                <input type="text" name="duration" id="duration"
                                                    class="form-control" value="{{ $course->duration }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>تاریخ شروع</label>
                                                <input type="text" name="start_dates" id="start_dates"
                                                    class="form-control" value="{{ $course->start_dates }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>هزینه دوره</label>
                                                <input type="text" name="fee" id="fee" class="form-control"
                                                    onkeyup="separateNum(this.value,this,'editNumToLetter');"
                                                    value="{{ number_format($course->fee) }}">
                                                {{-- name id div (numToLetter) nabayad hamnam id input (fee) bashad --}}
                                                <div id="editNumToLetter" style="text-align: justify">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>زبان</label>
                                                <input type="text" name="language" id="language"
                                                    class="form-control" value="{{ $course->language }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>تعداد صندلی فعال</label>
                                                <input type="text" name="seats_available" id="seats_available"
                                                    class="form-control" value="{{ $course->seats_available }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>توضیحات</label>
                                                <textarea name="description" id="description">{{ $course->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            ثبت
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End- Edit Course Modal -->
