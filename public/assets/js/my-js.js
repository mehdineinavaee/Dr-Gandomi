// virtual select
VirtualSelect.init({
  ele: "#categories",
});

// Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// Delete
$(document).on("click", ".delete", function (e) {
  e.preventDefault();
  var url = $(this).val();
  $("#url").val(url);
  $("#DeleteModal").modal("show");
});

$(document).on("click", ".delete_btn", function (e) {
  e.preventDefault();

  $(this).text("در حال حذف ...");

  var url = $("#url").val();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    type: "DELETE",
    url: url,
    success: function (response) {
      // console.log(response);
      Swal.fire(response.message, response.status, "success").then(() => {
        location.reload();
      });
      $("#DeleteModal").modal("hide");
      $(".delete_btn").text("موافقم");
    },
  });
});
