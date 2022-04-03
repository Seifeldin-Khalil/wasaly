var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


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
