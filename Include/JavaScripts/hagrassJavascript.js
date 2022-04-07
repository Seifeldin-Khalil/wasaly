function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch, asc, desc;
  table = document.getElementById("orderHistory");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[3];
      y = rows[i + 1].getElementsByTagName("TD")[3];
        
        if(document.getElementById("filtercheck").checked){
            asc = document.getElementById("filtercheck").value;
        }else if(document.getElementById("filtercheck2").checked){
            desc = document.getElementById("filtercheck2").value;
        }
      if(asc == "asc"){
      //check if the two rows should switch place:
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
      }else if(desc == "desc"){
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function searchInTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("orderHistory");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


/* jquery*/

$(document).ready(function(){
  $("#sortbutton").hover(function(){
    $(this).css("background-color", "gray");
    }, function(){
    $(this).css("background-color", "#14b38a");
  });
});

$(document).ready(function(){
  $(".addtocart").hover(function(){
    $(this).css("background-color", "gray");
    }, function(){
    $(this).css("background-color", "#14b38a");
  });
});
/*sort alert*/
$(document).ready(function(){
  $("#sortbutton").click(function(){
    alert("Orders will sort by Price");
  });
});

/*scroll to top enable and disable*/
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $("#totop").fadeIn();
    } else {
        $("#totop").fadeOut();
    }
});

/*scroll up animation*/
$(document).ready(function(){
    $("#totop").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
    });
});

/*add product jquery*/
$(document).ready(function(){
  $(".addproduct").hover(function(){
    $(this).css("background-color", "gray");
    }, function(){
    $(this).css("background-color", "#14b38a");
  });
});

/* add item validation*/
function addItemvalidateForm() {
     var x = document.forms["addItem"]["prodid"].value;
     if (x == "") {
     alert("You must enter product id");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter numbers");
     return false;
     }
    
     var x = document.forms["addItem"]["prodname"].value;
     if (x == "") {
     alert("Name product must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == false) {
     alert("You must enter name to your product with letters");
     return false;
     }
     
     var x = document.forms["addItem"]["prodcat"].value;
     var lower = x.toLowerCase();
     if (!lower.includes("fruits")) {
         if (!lower.includes("veggies")) {
             alert("Your category must be from two types(fruits & veggies)");
             return false;
         }
     }
     
     var x = document.forms["addItem"]["prodamount"].value;
     if (x == "") {
     alert("product amount must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter amount in numbers");
     return false;
     }else if(/\d/.test(x) == false){
     alert("your amount should be in numbers");
     return false;
     }
    
     var x = document.forms["addItem"]["prodprice"].value;
     if (x == "") {
     alert("product price must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter price in numbers");
     return false;
     }else if(/\d/.test(x) == false){
     alert("your price should be in numbers");
     return false;
     }
    
     var x = document.forms["addItem"]["prodaccept"];
     if (!x.checked) {
     alert("You must varify your self");
     return false;
     }
}

/*edit product*/
function editItemvalidateForm() {
     var x = document.forms["editForm"]["prodid"].value;
     if (x == "") {
     alert("You must enter product id");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter numbers");
     return false;
     }
    
     var x = document.forms["editForm"]["prodname"].value;
     if (x == "") {
     alert("Name product must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == false) {
     alert("You must enter name to your product with letters");
     return false;
     }
     
     var x = document.forms["editForm"]["prodcat"].value;
     var lower = x.toLowerCase();
     if (!lower.includes("fruits")) {
         if (!lower.includes("veggies")) {
             alert("Your category must be from two types(fruits & veggies)");
             return false;
         }
     }
     
     var x = document.forms["editForm"]["prodamount"].value;
     if (x == "") {
     alert("product amount must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter amount in numbers");
     return false;
     }else if(/\d/.test(x) == false){
     alert("your amount should be in numbers");
     return false;
     }
     var x = document.forms["editForm"]["prodprice"].value;
     if (x == "") {
     alert("product price must be filled out");
     return false;
     }else if (/[A-Za-z]/.test(x) == true) {
     alert("You must enter price in numbers");
     return false;
     }else if(/\d/.test(x) == false){
     alert("your price should be in numbers");
     return false;
     }
    
     var x = document.forms["editForm"]["prodaccept"];
     if (!x.checked) {
     alert("You must varify your self");
     return false;
     }
}

/*sign up*/
function signupvalidateForm() {
     var x = document.forms["signup"]["fname"].value;
     if (x == "") {
     alert("You must enter your first name");
     return false;
     }else if (/[A-Za-z]/.test(x) == false) {
     alert("You must enter first name in letters");
     return false;
     }
    
     var x = document.forms["signup"]["lname"].value;
     if (x == "") {
     alert("You must enter your last name");
     return false;
     }else if (/[A-Za-z]/.test(x) == false) {
     alert("You must enter first name in letters");
     return false;
     }
    
     x = document.forms["signup"]["email"].value;
     if (x == "") {
     alert("Email must be filled out");
     return false;
     } else if (!x.includes("@")) {
     alert("Does not have mail format");
         return false;
     }else if (!x.includes(".com")) {
     alert("Does not have mail format");
         return false;
     }
    
     x = document.forms["signup"]["address"].value;
     if (x == "") {
     alert("Address must be filled out");
     return false;
     }
    
     x = document.forms["signup"]["mobile"].value;
     if (x == "") {
     alert("phone number must be filled out");
     return false;
     }else if(/\d/.test(x) == false){
         alert("phone number must in numbers");
         return false;
     }
    
     x = document.forms["signup"]["age"].value;
     if (x == "" || (x.match(/\D/) == null) == false || x < 0) {
     alert("Not a number or number less than 0");
     return false;
     }
    
     var x = document.forms["signup"]["username"].value;
     if (x == "") {
     alert("Username must be filled out");
     return false;
     }
    

     x = document.forms["signup"]["password"].value;
     var y = document.forms["signup"]["reenterpassword"].value;
     if (x != y) {
     alert("Password retype does not match");
     return false;
     }
     if (x.length < 8) {
     alert("password length not enough, minimum 8");
     return false;
     }
     if (/\d/.test(x) == false) {
     //Checks if it contains any number
     alert("password does not contain a number");
     return false;
     }
     if (/[A-Za-z]/.test(x) == false) {
     alert("password does not contain a letter");
     return false;
     }
    
     var x = document.forms["signup"]["accept"];
     if (!x.checked) {
     alert("You must accept Terms & Conditions");
     return false;
     }
}