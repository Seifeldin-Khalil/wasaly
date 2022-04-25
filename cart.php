<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,follow" />

    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="Include/CSS/MaiiStylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
    <!-- Header Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="Include/JavaScripts/Script.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>


    <title>My Cart</title>
</head>

<body>
    <nav>

        <div class="navbar2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="navbar-header">
                            <a href="#"><img class="navimg" src="imgs/navbar_logo.png"></a>
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
    <div class="shopping-cart" id="cartBox">
        <!-- Title -->
        <div class="carttitle">
            <span style="float:left">Shopping Bag
            </span>
            <button onclick="removeAllCartItems()" style="font-size: 15px; float: right; background-color: #9dc2f2; border-radius: 50px; padding: 8px 30px;font-family: 'Montserrat', sans-serif;">Remove All</button>
        </div>

        <!-- Product #1 -->
        <div class="cartitem" id="item1">
            <div class="cartbuttons">
                <button class="delete-btn" id="deleteItem1" type="button" name="button" onclick="deleteItem(this.id)">
                    <img src="imgs/Maii/delete-icn.svg" alt="" />
                </button>
            </div>

            <div class="cartItemImage">
                <img src="imgs/Fruits&Veggies/redApples.kpg.jpg" alt="" />
            </div>

            <div class="cartItemDescription">
                <span>Sugarbee Apples</span>
            </div>

            <div class="cartItemquantity">
                <button class="plus-btn" id="PlusBtn1" type="button" name="button" onclick="plusQunatity(this.id)">
                    <img src="imgs/Maii/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1" id="Qunatity" readonly>
                <button class="minus-btn" type="button" name="button" onclick="minusQunatity()">
                    <img src="imgs/Maii/minus.svg" alt="" />
                </button>
            </div>

            <div id="Item-total-price">$ 5</div>
        </div>

        <center>
            <div class="chckout" align="right">
                <div class="Cartsummary">
                    <div>
                        <div class="Subtotal">Sub-Total</div>
                        <div id="itemsCnt">1 item</div>
                    </div>
                    <div id="total-amount">$ 5</div>
                </div>
                <button class="chkoutBtn" onclick="document.location='Checkout.html'">Checkout</button>
            </div>
        </center>
    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <img src="imgs/final_footer.png" alt="footer logo">
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

                <a href="#"><i><img class="facebook" src="imgs/footer_icons/facebook.png"></i></a>
                <a href="#"><i><img class="twitter" src="imgs/footer_icons/twitter.png"></i></a>
                <a href="#"><i></i><img class="youtube" src="imgs/footer_icons/youtube.png"></a>
                <a href="#"><i><img class="instagram" src="imgs/footer_icons/instagram.png"></i></a>

            </div>
        </div>
    </footer>

</body>


</html>