/* -- Maiada: Contact Us -- */

$(document).ready(function () {
    $('.sign-up-form').on('submit', submit);
});

function submit(e) {
    $('.sign-up-container').addClass('submitted');
    e.preventDefault();
}

function contactUsFormValidation() {
    var x = document.forms["ContactUS"]["firstname"].value;
    if (x == "") {
        alert("Please fill in your name");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in your name");
        return false;
    }

    var x = document.forms["ContactUS"]["phone"].value;
    if (x == "") {
        alert("Please fill in your phone number");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in your phone");
        return true;
    }

    var x = document.forms["ContactUS"]["desc"].value;
    if (x == "") {
        alert("Please fill in your needs");
        return false;
    }
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

/* -- Maiada: User Account -- */

function UserAccFormValidation() {
    var x = document.forms["UserAccountDetails"]["Fullname"].value;
    if (x == "") {
        alert("Name cannot be empty");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in your name");
        return false;
    }

    var x = document.forms["UserAccountDetails"]["Email"].value;
    if (x == "") {
        alert("Email cannot be empty");
        return false;
    } else if (!x.includes("@")) {
        alert("Wrong email format");
    } else if (!x.includes(".com")) {
        alert("Wrong email format");
    }

    var x = document.forms["UserAccountDetails"]["Phone"].value;
    if (x == "") {
        alert("Phone Number cannot be empty");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in your phone");
        return true;
    }

    var x = document.forms["UserAccountDetails"]["Street"].value;
    if (x == "") {
        alert("Street cannot be empty");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in the street");
        return false;
    }

    var x = document.forms["UserAccountDetails"]["city"].value;
    if (x == "") {
        alert("City cannot be empty");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in the city");
        return false;
    }

    var x = document.forms["UserAccountDetails"]["State"].value;
    if (x == "") {
        alert("State cannot be empty");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in the state");
        return false;
    }

}

/* -- Maiada: Admin Account -- */

function AdminAccFormValidation() {
    var x = document.forms["UserAccountDetails"]["Fullname"].value;
    if (x == "") {
        alert("Name cannot be empty");
        return false;
    } else if (/[A-Za-z]/.test(x) == false) {
        alert("Please use letters only in your name");
        return false;
    }

    var x = document.forms["UserAccountDetails"]["Email"].value;
    if (x == "") {
        alert("Email cannot be empty");
        return false;
    } else if (!x.includes("@")) {
        alert("Wrong email format");
    } else if (!x.includes(".com")) {
        alert("Wrong email format");
    }

    var x = document.forms["UserAccountDetails"]["Phone"].value;
    if (x == "") {
        alert("Phone Number cannot be empty");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in your phone");
        return true;
    }
    
    var x = document.forms["UserAccountDetails"]["Pass"].value;
    if (x == "") {
        alert("Please enter the old password");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in the password");
        return true;
    }
    
    var x = document.forms["UserAccountDetails"]["newPass"].value;
    if (x == "") {
        alert("Please enter the new password");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in the password");
        return true;
    }
    
    var x = document.forms["UserAccountDetails"]["confirmPass"].value;
    if (x == "") {
        alert("Please confirm the new password");
        return false;
    } else if (/\d/.test(x) == true) {
        alert("Please use numbers only in the password");
        return true;
    }
}