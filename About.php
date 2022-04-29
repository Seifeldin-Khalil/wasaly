<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel= "stylesheet" href="Include/CSS/AssemStyleSheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <script src="Include/JavaScripts/assem.js"></script>
     <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />

     <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');
</style>


</head>

<body>
<?php include("Include/header & footer/Header.php"); ?>
    <script>
function loadMission() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("mission").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "Our_Mission.txt", true);
  xhttp.send();
}
function loadVision() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("vision").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "Our_Vision.txt", true);
  xhttp.send();
}
function loadValues() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("values").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "Our_Values.txt", true);
  xhttp.send();
}
</script>
 <div id="page-container">
   <div id="content-wrap">
     <!-- all other page content -->
   </div>
     
       <div class = "about-center">
     
     <h1 class = about-title-main>ABOUT US</h1>
           <center>
           <p class = about-p-main>
           Wasaly Mart is an online platform that delivers fresh products farmed in the best farms in the middle east, to the customer's hands.
               Wasaly Mart was found in early 2022. The whole idea was brought up from a university project that was implemented by a group of students.
               

           </p>
                          </center>
           <br>
           <br>
           <br>
           <br>
           <hr>
           <br>
           <br>
     </div> 
    <div class = about-container>
     <div class = "about-mid">
        <h1 class = "about-title"> OUR MISSION</h1>
        <div id = "mission">
            <center>
                <br>
        <button class = "btn" onclick = "loadMission()"> Read More ! </button>
</div>

</center>
     </div>
        <img class = "about-img" src = "imgs/Home/ourmission.jpg">
        </div>
</div>
     
     <br>
     <br>
     <hr>
     <br>
     <br>
        <div class = about-container>
     <div class = "about-mid">
        <h1 class = "about-title"> OUR VISION</h1>
        <div id = "vision">
            <br>
            <center>
        <button class ="btn" onclick = "loadVision()"> Read More ! </button>
</div>
</center>
     </div>
        <img class = "about-img" src = "imgs/Home/ourvision.jpg">
        </div>
    <br>
     <br>
     <hr>
     <br>
     <br>
       <div class = about-container>
     <div class = "about-mid">
        <h1 class = "about-title">  OUR VALUES </h1>
        <div id = "values">
            <br>
            <center>
        <button class = "btn" onclick = "loadValues()"> Read More ! </button>
</div>
</center>
     </div>
        <img src = "imgs/Home/ourvalues.jpg">
        </div>
     <div class = "about-final-image">
         <br><br><br>
     
         <center>
             <a href="Home.html">
     <img src = "imgs/Home/final%20footer.png" >
       
             </a>
              </center>
     </div>
     <br>
     <br>
     <br>
     <hr>
     <br>
     <br>
    <script>
     $(document).ready(function(){
    $(".about-mid").hover(function(){
  $(this).css({"background-color": "rgba(211,211,211,0.2)", "font-size": "200%","box-shadow": "5px 10px 5px #888888"});
  },function(){
  $(this).css({"background-color": "white", "box-shadow": "0px 0px #000000"});
});
});
     </script>
         <script>
     $(document).ready(function(){
    $(".about-center").hover(function(){
  $(this).css({"background-color": "rgba(211,211,211,0.2)", "font-size": "200%","box-shadow": "5px 10px 5px #888888"});
  },function(){
  $(this).css({"background-color": "white", "box-shadow": "0px 0px #000000"});
});
});
     </script>
     
     <?php include("Include/header & footer/Footer.php"); ?>
</body>


<style>
    .btn{
	width: 35%;
	padding: 0.5rem 1rem;
	background-color: black;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size:20px;
}

.btn:hover{
    background-color: #43be9e;
}
    </style>
</html>