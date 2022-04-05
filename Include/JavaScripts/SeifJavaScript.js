document.addEventListener("DOMContentLoaded", function(event) {


const cartButtons = document.querySelectorAll('.cart-button');

cartButtons.forEach(button => {

button.addEventListener('click',cartClick);

});

function cartClick(){
let button =this;
button.classList.add('clicked');
}
});

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';
}

function paymentAlert() {
  alert("Payment Successful");
}

function checkoutValidation() {
    var x = document.forms["Checkout"]["yes"];
     if (x.checked) {
     var x = document.forms["Checkout"]["City"].value;
  if (x == "") {
    alert("City must be filled out");
    return false;
  }
    var x = document.forms["Checkout"]["Address"].value;
  if (x == "") {
    alert("Address must be filled out");
    return false;
  }
      var x = document.forms["Checkout"]["postal"].value;
  if (x == "") {
    alert("Post/zip code must be filled out");
    return false;
  }
       var x = document.forms["Checkout"]["cName"].value;
  if (x == "") {
    alert("Card Name Holder must be filled out");
    return false;
  }
         var x = document.forms["Checkout"]["cvv"].value;
  if (x == "") {
    alert("cvv must be filled out");
    return false;
  }
        var x = document.forms["Checkout"]["Expiry"].value;
  if (x == "") {
    alert("Expiry Date must be filled out");
    return false;
  }
}
    else{
        var x = document.forms["Checkout"]["City"].value;
  if (x == "") {
    alert("City must be filled out");
    return false;
  }
    var x = document.forms["Checkout"]["Address"].value;
  if (x == "") {
    alert("Address must be filled out");
    return false;
  }
      var x = document.forms["Checkout"]["postal"].value;
  if (x == "") {
    alert("Post/zip code must be filled out");
    return false;
  }
    }
}
