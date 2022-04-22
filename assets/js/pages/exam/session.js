import { httpRequestUrlApp } from "../../api/index.js";
import { URL_APP } from "../../api/module.js";

const btnStartSession = document.getElementById("btn-start-session");
const errorMessage = document.getElementById("error-message");
const btnCheckExam = document.getElementById("btn-check-exam");

$("#form-session").on("submit", function (e) {
  e.preventDefault();
  LoadingButton(btnStartSession);
  const data = $(this).serialize();
  httpRequestUrlApp(
    "/exam/session/check",
    "POST",
      data,
    (res) => {
        let response = JSON.parse(res);
        if (response.status === 200) {
            SuccessMessage(`Reservasi anda telah berhasil dibuat.`);
            $(this).trigger("reset");
            DisLoadingButton(
                btnStartSession,
                '<i class="fa fa-sign-in"></i> Submit'
            )
        } else {
            DisLoadingButton(
                btnStartSession,
                '<i class="fa fa-sign-in"></i> Submit'
            )
            ErrorMessage(response.message, false);
        }

    },
    (statusCode, message, jqXHR, exception) => {
      let jsonResponse = jqXHR.responseJSON;
      console.log(jqXHR);
      DisLoadingButton(
        btnStartSession,
        '<i class="fa fa-sign-in"></i> Submit'
      );
      ErrorMessage(jsonResponse.response.message, false);
    }
  );
});

$("#form-check-exam").on("submit", function (e) {
    e.preventDefault();
    LoadingButton(btnCheckExam);
    const data = $(this).serialize();
    httpRequestUrlApp(
        "/exam/result/check",
        "POST",
        data,
        (res) => {
            let response = JSON.parse(res);
            if (response.status === 200) {
                SuccessMessage(`You will be redirected to the result page in 5 seconds.`);
                setInterval(() => {
                    window.location.href = `${URL_APP()}/exam/result`
                }, 5000);
            } else {
                DisLoadingButton(
                    btnCheckExam,
                    '<i class="fa fa-check"></i> Check Exam'
                )
                ErrorMessage(response.message, false);
            }

        },
        (statusCode, message, jqXHR, exception) => {
            let jsonResponse = jqXHR.responseJSON;
            console.log(jqXHR);
            DisLoadingButton(
                btnCheckExam,
                '<i class="fa fa-check"></i> Check Exam'
            );
            ErrorMessage(jsonResponse.response.message, false);
        }
    );
});

function LoadingButton(element) {
  element.setAttribute("disabled", "true");
  element.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Loading...';
}

function DisLoadingButton(element, htmlInput) {
  element.removeAttribute("disabled");
  element.innerHTML = htmlInput;
}

function ErrorMessage(messageError, closeError = true) {
  errorMessage.innerHTML = `<div class="alert alert-danger">${messageError}</div>`;
  if (closeError) {
    setTimeout(() => {
      errorMessage.innerHTML = "";
    }, 5000);
  }
}

function SuccessMessage(messageSuccess) {
  errorMessage.innerHTML = `<div class="alert alert-success">${messageSuccess}</div>`;
}
