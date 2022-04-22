
import { httpRequestUrlApp } from "../api/index.js";

$("#questionAdd").on("hide.bs.modal", () => {
  $("#question_form")[0].reset();
  window.editor.setData("")
});

$('button[data-target="#questionAdd"]').click(function () {
    let data = $(this).data("data");
    const id = $(this).data("id");
  
    // set title of modal
    $("#questionAddLabel").text(
      typeof data !== "undefined" ? "Edit List Soal" : "Buat List Soal"
    );
  
    // set data to form modal
  
    $("#question_form").attr("action", `/admin/question/create`);
    if (typeof data !== "undefined") {
      $("#question_form").attr("action", `/admin/question/edit/${id}`);

      const form = $("#question_form").find(".form-control");

      form.each((i, v) => {
        $(v).val(data[$(v).attr("name")]).change();
      });
      
      window.editor.setData(data.description);
    }
  });
  
  $("#question_form").on("submit", function (e) {
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

$("#delete").on("click", () => {
    const id = $("button[data-target='#modalDelete']").data("id");

    httpRequestUrlApp(
        `/admin/question/delete/${id}`,
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

$("button[data-target='#modalStatusQuestion']").click(function () {
    const id = $(this).data("id");
    const status = $(this).data("status");
    $("#publish").data("id", id);
    $("#publish").data("status", status);
})

$("#publish").on("click", function() {
    const id = $(this).data("id");
    const status = $(this).data("status");
    httpRequestUrlApp(
        `/admin/question/${status}/${id}`,
        "POST",
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