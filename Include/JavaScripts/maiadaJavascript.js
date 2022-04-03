/* -- Maiada: Contact Us -- */

$(document).ready(function () {
    $('.sign-up-form').on('submit', submit);
});

function submit(e) {
    $('.sign-up-container').addClass('submitted');
    e.preventDefault();
}

/* -- Maiada: Cart -- */

function removeAllCartItems() {
    var container = document.getElementById("cartBox");
    var elements = container.getElementsByClassName("cartitem");

    while (elements[0]) {
        elements[0].parentNode.removeChild(elements[0]);
    }

    document.getElementById("total-amount").innerHTML = "$ 0";
    document.getElementById("itemsCnt").innerHTML = "0 items";
}

function deleteItem(idd) {
    document.getElementById(idd).parentNode.parentNode.remove();

    // Update checkout summary
    // should have deduced the item's total price  from the total order price according to the selected  item to be deleted but will be fixed in phase 2 with database but for now...
    document.getElementById("total-amount").innerHTML = "$ 0";
    document.getElementById("itemsCnt").innerHTML = "0 items";
}

function minusQunatity() {
    // Selecting the input element and get its value 
    var inputVal = document.getElementById("Qunatity").value;
    var val = parseInt(inputVal);

    // selecting the total price element and getting its alue
    var totalprice = document.getElementById("Item-total-price").innerHTML;
    var myArray = totalprice.split(" ");
    var tPrice = parseInt(myArray[1]);

    // Deducing one item's price 
    var itemPrice = tPrice / val;

    // updating the the quantity
    if (val == 1) {
        alert('Cannot reduce more. Please remove instead');
    } else {
        val = val - 1;

        // Updating the total price
        var newPrice = tPrice - itemPrice;

        //displaying the new quanitity
        document.getElementById("Qunatity").value = val;

        // displaying the new price
        document.getElementById("Item-total-price").innerHTML = "$ " + newPrice;

        // get current order total price 
        var currTotal = document.getElementById("total-amount").innerHTML;
        var Array = currTotal.split(" ");
        var curTot = parseInt(Array[1]);
        var updatedTotal = curTot - itemPrice;

        // update order total price 
        // - itemPrice
        document.getElementById("total-amount").innerHTML = "$ " + updatedTotal;
    }
}


function plusQunatity() {
    // Selecting the input element and get its value 
    var inputVal = document.getElementById("Qunatity").value;
    var val = parseInt(inputVal);

    // selecting the total price element and getting its alue
    var totalprice = document.getElementById("Item-total-price").innerHTML;
    var myArray = totalprice.split(" ");
    var tPrice = parseInt(myArray[1]);

    // Deducing one item's price 
    var itemPrice = tPrice / val;

    // updating the the quantity
    if (val >= 9) {
        val = 9;
        itemPrice = 0;
        alert("Can't add more kilos");
    } else {
        val = val + 1;
    }

    // Updating the total price
    var newPrice = tPrice + itemPrice;

    //displaying the new quanitity
    document.getElementById("Qunatity").value = val;

    // displaying the new price
    document.getElementById("Item-total-price").innerHTML = "$ " + newPrice;

    // get current order total price 
    var currTotal = document.getElementById("total-amount").innerHTML;
    var Array = currTotal.split(" ");
    var curTot = parseInt(Array[1]);
    var updatedTotal = curTot + itemPrice;

    // update order total price 
    // - itemPrice
    document.getElementById("total-amount").innerHTML = "$ " + updatedTotal;
}

/* -- Maiada: Admin Stock Management -- */
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("stocktabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}