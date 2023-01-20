    <!-- Add Mode Modal -->
    <div class="modal fade" id="add_mode_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="candidates-resume-area ptb-50">
                    <div class="container">
                        <div class="candidates-resume-content">
                            <form class="resume-info" autocomplete="off" action="{{ route('modes.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-header">
                                    <h5 class="modal-title">روش برگزاری دوره ها</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>عنوان</label>
                                                <input type="text" name="title" id="title"
                                                    class="form-control">
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
    <!-- End- Add Mode Modal -->
