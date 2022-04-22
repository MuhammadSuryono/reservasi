import {httpRequestUrlApp} from "../api/index.js";
import {DisLoadingButton, LoadingButton} from "../api/module.js";

$("#templateAdd").on("hide.bs.modal", () => {
    $("#template_form")[0].reset();
});

$('button[data-target="#templateAdd"]').click(function () {
    let data = $(this).data("template");

    // set title of modal
    $("#templateAddLabel").text(
        typeof data !== "undefined" ? "Edit Template" : "Create Template"
    );

    // set data to form modal
    $("#template_form").attr("action", `/admin/setting/announcement/create`);
    if (typeof data !== "undefined") {
        $("#template_form").attr("action", `/admin/setting/announcement/edit/${data.id}`);

        const form = $("#template_form").find(".form-control");
        form.each((i, v) => {
            $(v).val(data[$(v).attr("name")]).change();
        });

        $('.summernote').summernote("code", data.template)
    }
});

$('button[data-target="#modalPreview"]').click(function () {
    let data = $(this).data("value");
    $('#preview').html(data.template);
});

$("#template_form").on("submit", function (e) {
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

    httpRequestUrlApp(`/admin/setting/announcement/delete/${id}`, "DELETE", null, (res) => {
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