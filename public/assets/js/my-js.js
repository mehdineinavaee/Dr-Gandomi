// virtual select
VirtualSelect.init({
  ele: "#categories",
});

// Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// Delete Course
$(document).on("click", ".delete_course", function (e) {
  e.preventDefault();
  var course_id = $(this).val();
  // console.log(course_id);
  $("#delete_course_id").val(course_id);
  $("#DeleteCourseModal").modal("show");
});

$(document).on("click", ".delete_course_btn", function (e) {
  e.preventDefault();

  $(this).text("در حال حذف ...");

  var course_id = $("#delete_course_id").val();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    type: "DELETE",
    url: "/courses/" + course_id,
    success: function (response) {
      // console.log(response);
      Swal.fire(response.message, response.status, "success").then(() => {
        location.reload();
      });
      $("#DeleteCourseModal").modal("hide");
      $(".delete_course_btn").text("موافقم");
    },
  });
});

// Delete Category
$(document).on("click", ".delete_category", function (e) {
  e.preventDefault();
  var category_id = $(this).val();
  // console.log(category_id);
  $("#delete_category_id").val(category_id);
  $("#DeleteCategoryModal").modal("show");
});

$(document).on("click", ".delete_category_btn", function (e) {
  e.preventDefault();

  $(this).text("در حال حذف ...");

  var category_id = $("#delete_category_id").val();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    type: "DELETE",
    url: "/categories/" + category_id,
    success: function (response) {
      // console.log(response);
      Swal.fire(response.message, response.status, "success").then(() => {
        location.reload();
      });
      $("#DeleteCategoryModal").modal("hide");
      $(".delete_category_btn").text("موافقم");
    },
  });
});

// Delete Mode
$(document).on("click", ".delete_mode", function (e) {
  e.preventDefault();
  var mode_id = $(this).val();
  // console.log(mode_id);
  $("#delete_mode_id").val(mode_id);
  $("#DeleteModeModal").modal("show");
});

$(document).on("click", ".delete_mode_btn", function (e) {
  e.preventDefault();

  $(this).text("در حال حذف ...");

  var mode_id = $("#delete_mode_id").val();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    type: "DELETE",
    url: "/modes/" + mode_id,
    success: function (response) {
      // console.log(response);
      Swal.fire(response.message, response.status, "success").then(() => {
        location.reload();
      });
      $("#DeleteModeModal").modal("hide");
      $(".delete_mode_btn").text("موافقم");
    },
  });
});
