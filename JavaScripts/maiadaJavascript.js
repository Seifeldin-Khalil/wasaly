/* Contact Us: Subs form */
$(document).ready(function () {
    $('.sign-up-form').on('submit', submit);
});

function submit(e) {
    $('.sign-up-container').addClass('submitted');
    e.preventDefault();
}

/* Cart */



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
    if(val >= 9){
        val = 9;
        itemPrice = 0;
        alert("Can't add more kilos");
    }else{
        val = val + 1;
    }
    
    // Updating the total price
    var newPrice = tPrice + itemPrice;

    //displaying the new quanitity
    document.getElementById("Qunatity").value = val;
    
    // displaying the new price
    document.getElementById("Item-total-price").innerHTML= "$ " + newPrice;
}

$('.delete-btn').click(function() {
  $(this).slideUp();
});