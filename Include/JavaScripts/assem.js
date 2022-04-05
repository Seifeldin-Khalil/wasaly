function validateForm() {
  var x = document.forms["feedback"]["name"].value;
  if (x == "") 
  {
    alert("Name must be filled out");
    return false;
  }
    x = document.forms["feedback"]["email"].value;
      if (x == "") 
      {
        alert("Email must be filled out");
        return false;
      }
    x = document.forms["feedback"]["phone"].value;
      if (x == "") 
      {
        alert("Phone must be filled out");
        return false;
      }
    x = document.forms["feedback"]["message"].value;
      if (x == "") 
      {
        alert("Message must be filled out");
        return false;
      }
    x = document.forms["feedback"]["rating"].value;
      if (x == "no rating") 
      {
        alert("Rating must be filled out");
        return false;
      }
}
$(document).ready(function(){
    $(".btn").click(function () {
        alert("Feedback Submitted");
    });
});
    
 