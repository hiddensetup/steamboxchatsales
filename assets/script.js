function checkUrlParameters() {
  const urlParams = new URLSearchParams(window.location.hash.substring(1));
  const modalParam = urlParams.get("modal");
  if (modalParam === "registrationModal") {
    $("#registrationModal").modal("show");
  }
}

$(document).ready(function () {
  checkUrlParameters();
});

function displayAlert() {
  let e = new URLSearchParams(window.location.search);
  if (e.has("success")) {
    document.getElementById("successAlert").style.display = "block";
    setTimeout(function () {
      window.location.href = "205b5e20f259a93e1a6f25d8bde43e422b0e5615d1d.php";
    }, 1500);
  } else if (e.has("error")) {
    let l = decodeURIComponent(e.get("error"));
    document.getElementById("errorAlert").innerText = "Error: " + l;
    document.getElementById("errorAlert").style.display = "block";
  } else if (e.has("duplicate")) {
    document.getElementById("duplicateAlert").style.display = "block";
  }
}

displayAlert();

function updateRealTimeDate() {
  let now = new Date();
  let options = {
    hour: "numeric",
    minute: "numeric",
    timeZoneName: "short",
  };
  let formattedDate = now.toLocaleTimeString("en-US", options);
  document.getElementById("realTimeDate").textContent = formattedDate;
}

setInterval(updateRealTimeDate, 1000);

function updateNameDisplay() {
  let enteredName = document.getElementById("name").value + ",";
  document.getElementById("getName").textContent = enteredName;
}

updateRealTimeDate();

document.addEventListener("DOMContentLoaded", function () {
  function cleanAndValidateWhatsAppInput() {
    let inputElement = document.querySelector("input[name='whatsapp']");
    let inputValue = inputElement.value;
    let cleanedValue = inputValue.replace(/[\s-<%`'()#]/g, "");
    cleanedValue = cleanedValue.replace(/[^+\d]/g, "");
    inputElement.value = cleanedValue;
  }
  document
    .querySelector("input[name='whatsapp']")
    .addEventListener("input", cleanAndValidateWhatsAppInput);
});
