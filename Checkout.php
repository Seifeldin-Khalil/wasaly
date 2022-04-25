<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $cityErr = $addErr = $postalErr = $cNameErr = $cvvErr = $expErr = "";
    $city = $address = $postal = $cName = $cvv = $exp= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["City"])) {
    $cityErr = "City is required";
  }
  if (empty($_POST["Address"])) {
    $addErr = "Address is required";
  }
  if (empty($_POST["postal"])) {
    $postalErr = "postal code is required";
  }
  if (empty($_POST["cName"])) {
    $cNameErr = "Credit card name is required";
  }
  if (empty($_POST["cvv"])) {
    $cvvErr = "Cvv is required";
  }
  if (empty($_POST["Expiry"])) {
    $expErr = "Expiry date is required";
  }
}

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Include/CSS/SeifStyleSheet.css">
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src="Include/JavaScripts/Script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


</head>
    <body>
        <nav>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <div class="navbar2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="navbar-header">
                                <a href="#"><img class = "navimg" src = "imgs/navbar_logo.png"></a>
                            </div>
                            <div class="navbar-collapse collapse" id="mobile_menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="Home.html">Home</a></li>
                                    <li><a href="About.html" class="dropdown-toggle">About Us</a></li>
                                    <li><a href="User%20Fruits.html">Fruits</a></li>
                                    <li><a href="/User%20Veggies.html">Veggies</a></li>
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
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="/User%20Account.html"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Login.html">Login</a></li>
                                            <li><a href="Sign%20Up.html">Sign us</a></li>
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
        <center>
<form name="Checkout" method = "post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "formtemplate-checkout">
    <h1>Check-Out</h1>
                Credit Card <input type="checkbox" onclick="javascript:yesnoCheck();" name="yes" id="yesCheck"> Cash <input type="checkbox" onclick="javascript:yesnoCheck();" name="no" id="noCheck"><br>

        <div class = "section-checkout">
                <input name="City" placeholder="City" type="text" >
                <span> <?php echo $cityErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="Address" placeholder="Address" type="text" >
                <span> <?php echo $addErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="postal" placeholder="Post/zip code" type="text" >
                <span> <?php echo $postalErr;?></span>
            <br><br>
            </div>

    <div id="ifYes" style="visibility:hidden">
        <div class = "section-checkout">
                <input name="cName"placeholder="Card Holder Name" type="text" >
                <span> <?php echo $cNameErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="cvv" placeholder="CVV" type="text" >
                <span> <?php echo $cvvErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="Expiry" placeholder="Expiry Date" type="text" >
                <span> <?php echo $expErr;?></span>
            <br><br>
            </div>
    </div>
    <div>
                <input class="checkout-button" type="submit" name="submit" value = "Checkout">
            </div>
            </form>
        </center>

        <script>
            $(document).ready(function(){
    $(".checkout-button").hover(function(){
  $(this).css({"background-color": "green"});
  },function(){
  $(this).css({"background-color": "#3b4440"});
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

        <p class="footer-company-name">Wasaly.mart © 2015</p>
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

</body>
</html>
