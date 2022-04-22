import { httpRequestUrlApp } from "../api/index.js";

$("#sessionModal").on("hide.bs.modal", () => {
  $("#session_form")[0].reset();
});

$("#generate").click(() => {
  // generate random key
  let key = Math.random().toString(36).substring(2, 8);
  $('input[name="session_key"]').val(key).change();
});

$('button[data-target="#sessionModal"]').click(function () {
  let data = $(this).data("session");

  // set title of modal
  $("#sessionModalLabel").text(
    typeof data !== "undefined" ? "Edit Session" : "Create Session"
  );

  // set data to form modal

  $("#session_form").attr("action", `/admin/session/create`);
  if (typeof data !== "undefined") {
    $("#session_form").attr("action", `/admin/session/${data.id}`);

    const form = $("#session_form").find(".form-control");
    form.each((i, v) => {
      $(v).val(data[$(v).attr("name")]).change();
    });
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
      DisLoadingButton(btnSubmit, "Simpan");

      if (res.status === 200) {
        form[0].reset();
        toastr.success(res.message);
        $("#sessionModal").modal("hide");
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

$('button[data-target="#modalDelete"]').on("click", function () {
  let id = $(this).data("id");
  $("#formDelete").attr("action", `/admin/session/${id}`);
});

$("#delete").on("click", () => {
  const id = $("button[data-target='#modalDelete']").data("id");

  httpRequestUrlApp(`/admin/session/delete/${id}`, "DELETE", null, (res) => {
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
  });
});
