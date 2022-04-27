<?php
    session_start();
    require('connect.php');
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Include/CSS/SeifStyleSheet.css">
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src="Include/JavaScripts/Script.js">
    </script>
    <script script src="https://kit.fontawesome.com/74ca053b53.js" crossorigin="anonymous"></script>
    
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
</head>

<body>
    <nav> 
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
    </nav>
    <div class="header-fruits">
        <h1 style = "text-align: center">Vegetables</h1>
    </div>

    <div class="wrapper-fruits">
        <div class="container">
            <div class="row g-1">
            <?php
                 try {
                    $selecteproducts = $conn -> query("SELECT `Product_Name`, `Price` FROM `product` WHERE Category = 'Vegetables' ");
                    $selecteditems = $selecteproducts -> fetchAll(PDO::FETCH_ASSOC); 
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                foreach ( $selecteditems as $Vegetable) {
                echo '<div class="col-md-3">';
                echo    '<div class="carddd p-3">';
                echo        '<div class="text-center"> <img src="imgs/Fruits&Veggies/favpng_cavendish-banana-juice-cooking-banana-fruit.png" width="200"> </div>';
                echo        '<div class="product-details"> <span class="font-weight-bold d-block"><center>$' . $Vegetable['Price'] .'/kg</center></span> <center><span>' . $Vegetable['Product_Name'] . '</span></center>';
                echo            '<div class="buttttons d-flex flex-row">';
                echo               '<div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">' . 1 .'</span>Add to cart </button>';
                echo           '</div>';
                echo       '</div>';
                echo   '</div>';
                echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>



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