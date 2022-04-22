import { httpRequestUrlApp } from "../api/index.js";
import { BASE_URL_API_EXCEL } from "../api/module.js";

$("#upload").click(function () {
  const fileUpload = $("#formFile").prop("files")[0];
  let lastPath = window.location.href.substring(
    window.location.href.lastIndexOf("/") + 1
  );
  let listQuestionId = lastPath.split("?")[0];
  LoadingButton($("#upload"));

  if (fileUpload) {
    const formData = new FormData();
    formData.append("file", fileUpload);
    formData.append("listQuestionId", listQuestionId);

    $.ajax({
      type: "POST",
      url: BASE_URL_API_EXCEL + "upload/question/" + listQuestionId,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function (msg) {
        if (msg.is_success) window.location.reload();
      },
      error: function () {
        alert("Data Gagal Diupload");
      }
    });
  }
});

$('button[data-target="#groupAdd"]').click(function () {
  // set title of modal
  $("#groupAddLabel").text(
    typeof data !== "undefined" ? "Edit Group" : "Buat Group"
  );
});

$('a[data-target="#listeningGroup"]').click(function () {
  let file = BASE_URL_API_EXCEL + "group/question/listening/" + $(this).data('listening')
  $("#audio").attr("src", file);
});

/** GROUP */
$("#groupAdd").on("hide.bs.modal", () => {
  $("#group_form")[0].reset();
});

$("#btnGroupAdd").on("click", () => {
  $("#group_form").attr("action", `group/question/create`);
  $("#groupAddLabel").text("Buat Grup");
  window.editor.setData("");
});

$(".group-edit").on("click", function () {
  let data = $(this).data("group");
  data = JSON.parse(atob(data));
  $("#group_form").attr("action", `group/question/update/${data.id}`);
  $("#groupAddLabel").text("Edit Grup");

  const form = $("#group_form").find(".form-control");
  form.each((i, v) => {
    $(v).val(data[$(v).attr("name")]).change();
  });

  $('.summernote').summernote("code", data.question_group)
});

$("#group_form").on("submit", function (e) {
  e.preventDefault();

  let form = $(this);
  const fileUpload = $("#customFile").prop("files")[0];

  const formData = new FormData();
  if (fileUpload) {
    formData.append("file", fileUpload);
  }
  $.each(form.serializeArray(), function (i, v) {
    formData.append(v.name, v.value);
  });
  formData.append("list_question_id", form.data("question-id"));

  const btnSubmit = form.find('button[type="submit"]');
  LoadingButton(btnSubmit);

  $.ajax({
    type: "POST",
    url: BASE_URL_API_EXCEL + form.attr("action"),
    data: formData,
    cache: false,
    processData: false,
    contentType: false,
    success: function (msg) {
      form[0].reset();
      toastr.success(msg.message);
      if (msg.code === 200) window.location.reload();
    },
    error: function () {
      form[0].reset();
      toastr.error("Data Gagal Diupload");
    }
  });
});

/** END GROUP */

/** DELETE GROUP */
$(".delete-group").on("click", function () {
  $("#delete").data("id", $(this).data("id"));
});

$("#delete").on("click", function () {
  const id = $(this).data("id");
  LoadingButton($(this));

  httpRequestUrlApp(
    `/admin/group-question/delete/${id}`,
    "POST",
    null,
    (res) => {
      res = JSON.parse(res);
      DisLoadingButton($(this), "Hapus");

      if (res.status === 200) {
        toastr.success(res.message);
        $("#deleteModal").modal("hide");
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
});
/** END DELETE GROUP */

/**Buat soal */
$(() => {
  $("#form-create-question").on("submit", function (e) {
    e.preventDefault();
    let form = $(this);
    const param = new URLSearchParams(window.location.search);

    let serialize = form.serialize();
    serialize += "&list_question_id=" + param.get("list-id");
    serialize += "&group_question_id=" + param.get("group-id");

    const btnSubmit = $("#btn-submit-soal");
    LoadingButton(btnSubmit);

    httpRequestUrlApp(form.attr("action"), "POST", serialize, (res) => {
      res = JSON.parse(res);
      DisLoadingButton(btnSubmit, "Simpan");

      if (res.status === 200) {
        form[0].reset();
        toastr.success(res.message);
        $("#soalModal").modal("hide");
        location.reload();
        return;
      }

      if (res.status === 422) {
        JSON.parse(res.message).forEach((v) => {
          toastr.error(Object.values(v));
        });
      }
    }),
      (statusCode, message, jqXHR, exception) => {
        toastr.error(message);
        DisLoadingButton(btnSubmit, "Create");
      };
  });
});

/** End buat soal */
