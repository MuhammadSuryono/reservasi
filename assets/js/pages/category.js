import { httpRequestUrlApp } from "../api/index.js";

$("#categoryModal").on("hide.bs.modal", () => {
  $('#session_form')[0].reset();
})

$("#generate").click(() => {
  // generate random key
  let key =
    Math.random().toString(36).substring(2, 8)
  $('input[name="session_key"]').val(key).change();
});

$('button[data-target="#categoryModal"]').click(function () {
  let data = JSON.parse($(this).data("category"));
  // set title of modal
  $("#categoryModalLabel").text(
    typeof data !== "undefined" ? "Edit Category" : "Create Category"
  );

  // set data to form modal

  $("#session_form").attr("action", `/admin/category/create`);
  if (typeof data !== "undefined") {
      $("#session_form").attr("action", `/admin/category/${data.id}`);
      
    $('input[name="name"]').val(data.name).change();
  }
});

$("#session_form").on("submit", function (e) {
  e.preventDefault();
  let form = $(this);

  const btnSubmit = $(this).find('button[type="submit"]');
  LoadingButton(btnSubmit);

  httpRequestUrlApp(
    form.attr("action"),
    "POST",
    form.serialize(),
    (res) => {
      res = JSON.parse(res);
      DisLoadingButton(btnSubmit, 'Simpan');

      if (res.status === 200) {
        form[0].reset();
        toastr.success(res.message);
        $("#categoryModal").modal("hide");
        location.reload();
        return;
      }

      if (res.status === 422) {
        JSON.parse(res.message).forEach((v) => {
          toastr.error(Object.values(v));
        });
      }
    },
    (statusCode, message, jqXHR, exception) => {
      toastr.error(message);
      DisLoadingButton(btnSubmit, "Create");
    }
  );
});

function LoadingButton(element) {
  element.prop("disabled", true);
  element.html('<i class="fa fa-spinner fa-spin"></i> Loading...');
}

function DisLoadingButton(element, htmlInput) {
  element.prop("disabled", false);
  element.html(htmlInput);
}

$('button[data-target="#modalDelete"]').on("click", function () {
  let id = $(this).data("id");
  $("#formDelete").attr("action", `/admin/category/${id}`);
})

$("#delete").on("click", () => {
  const id = $("button[data-target='#modalDelete']").data("id");

  httpRequestUrlApp(
    `/admin/category/delete/${id}`,
    "DELETE",
    null,
    (res) => {
      res = JSON.parse(res);
      if (res.status === 200) {
        toastr.success(res.message);
        $("#modalDelete").modal("hide");
        location.reload();
        return;
      }

      if (res.status === 422) {
        JSON.parse(res.message).forEach((v) => {
          toastr.error(Object.values(v));
        });
      }
    }
  );
})