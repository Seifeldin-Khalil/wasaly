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
    <style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');
</style>


</head>

<body>
    
    <nav>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <div class="navbar2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="navbar-header">
                                <a href="#"><img class = "navimg" src = "imgs/final_footer.png"></a>
                            </div>                        
                            <div class="navbar-collapse collapse" id="mobile_menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="Home.html">Home</a></li>
                                    <li><a href="About.html" class="dropdown-toggle">About Us</a></li>
                                    <li><a href="User%20Fruits.html">Fruits</a></li>
                                    <li><a href="User%20Veggies.html">Veggies</a></li>
                                    <li><a href="contact%20us.html">Contact Us</a></li>
                                </ul>
                                <ul class="nav navbar-nav">
                                    <li>
                                        <form action="" class="navbar-form">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Cart</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Sign Up</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </nav>
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
     
    <footer class="footer-distributed">

    <div class="footer-left">

        <img src="imgs/final_footer.png" alt = "footer logo">
        <p class="footer-links">
            <a href="Home.html" class="link-1">Home</a>
            <a href="User%20Account.html">Account</a>
            <a href="About.html">About us</a>
            <a href="contact%20us.html">Contact us</a>
        </p>

        <p class="footer-company-name">Wasaly.mart Â© 2015</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Building 30, North 90 Road, </span> 5th Settlement, New Cairo, Egypt</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+201013700990</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">Support.mart@wasaly.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About wasaly.mart</span>
            Egyptian based company established to enhance the lifestyle and health of the Egyptian community. Our main goal is to provide you with the best quality fruits and vegetables from the comfort of your own home. Your health is our priority.
        </p>

        <div class="footer-icons">

            <a href="#"><i ><img class="facebook" src = "imgs/footer_icons/facebook.png"></i></a>
            <a href="#"><i ><img class="twitter" src = "imgs/footer_icons/twitter.png"></i></a>
            <a href="#"><i ></i><img class="youtube" src = "imgs/footer_icons/youtube.png"></a>
            <a href="#"><i ><img class="instagram" src = "imgs/footer_icons/instagram.png"></i></a>

        </div>
    </div>
</footer>
 </div>
</body>


<style>
    .btn{
	width: 30%;
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