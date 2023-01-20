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
