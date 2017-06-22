$.urlParam = function(name) {
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return !!results ? decodeURIComponent(results[1]) : null;
};

function displayErrors() {
  if (!!$.urlParam("error")) {
    $("#error-message").text($.urlParam("error"));
    $("#error-alert").removeClass("hidden");
  }
}

function displaySuccess() {
  if (!!$.urlParam("success")) {
    $("#success-message").text($.urlParam("success"));
    $("#success-alert").removeClass("hidden");
  }
}

function setUpCountly() {
  Countly.init({
    app_key: "53ec944e2cab9356d3577dd1e260dc113fbf210f",
    url: "https://stats.openlp.io" 
  });
  Countly.track_sessions();
  Countly.track_pageview();
  Countly.track_errors();
  console.log("Countly set up");
}

function setUpStripe() {
  var handler = StripeCheckout.configure({
    key: "pk_live_GWIWaLW8W53LNTthomxAyO5w",
    image: "https://openlp.org/assets/images/logo.png",
    locale: "auto",
    token: function(token) {
      $("#token").val(token.id);
      $("#donate").submit();
    }
  });
  $("#donate-button").on("click", function(event) {
    console.log("click!");
    // Open Checkout with further options:
    var amount = parseInt($("#amount").val()) * 100;
    handler.open({
      name: "OpenLP",
      description: "Donate to OpenLP",
      amount: amount,
      panelLabel: "Donate {{amount}}"
    });
    event.preventDefault();
  });
  // Close Checkout on page navigation:
  window.addEventListener("popstate", function() {
    handler.close();
  });
  $("#return-url").val(location.protocol + "//" + location.host + location.pathname);
}

$(document).ready(function () {
  setUpCountly();
  if (location.pathname.substr(0, 7) == "/donate") {
    // Online set these up on the donate page
    displayErrors();
    displaySuccess();
    setUpStripe();
  }
});
