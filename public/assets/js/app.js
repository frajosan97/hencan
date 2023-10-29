const host = window.location.host;
const pathname = window.location.pathname;
const currentUrl = window.location.href;

function root() {
  if (host == "localhost") {
    return "http://localhost/projects/hencan/";
  } else {
    return "";
  }
}

$(".searchDomainForm").on("submit", function (event) {
  event.preventDefault();
  var domSerRes = $(".domSerRes");
  domSerRes.html("<small class='text-muted'><div class='spinner-border spinner-border-sm mx-1' role='status'><span class='visually-hidden'>Loading...</span></div>Searching...</small>");
  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: root() + "/domain/searchDomain",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      domSerRes.html(data);
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
});

function addDomainToCart(domain) {
  var domain = domain.value;
  $.ajax({
    type: "POST",
    url: root() + "/cart/add",
    data: { domain: domain },
    success: function (data) {
      alert(data);
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
}

function removeDomain(domain) {
  var domain = domain.value;
  $.ajax({
    type: "POST",
    url: root() + "/cart/remove",
    data: { domain: domain },
    success: function (data) {
      alert(data);
      window.location.reload();
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
}

$(".regClientForm").on("submit", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: root() + "/auth/register",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      alert(data);
      if (data.includes("successfull")) {
        window.location.href = root() + "client";
      }
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
});

$(".clientLoginForm").on("submit", function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  $.ajax({
    type: "POST",
    url: root() + "/auth",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      alert(data);
      if (data.includes("successfull")) {
        window.location.href = root() + "client";
      }
    },
    error: function (xhr, desc, err) {
      console.log(xhr);
    },
  });
});

// function loadDoc() {
//   setInterval(() => {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function () {
//       if (this.readyState == 4 && this.status == 200) {
//         $(".cartCount").html(this.response);
//       }
//     };
//     xhttp.open("GET", root() + "cart/checkCart", true);
//     xhttp.send();
//   }, 1000);
// }

// // Trigger load
// loadDoc();

function countryCodes() {
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    hiddenInput: "phone",
    initialCountry: "ke",
    separateDialCode: true,
    utilsScript: root() + "/public/assets/js/utils.js"
  });
}