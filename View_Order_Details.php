<?php 
    require('connect.php');
    /*session_start();
    if (!isset($_SESSION['loggedIn'])) {
        header("location: HomePage.php");
    }*/
?>

<!DOCTYPE html>
<html>

<head>
    <!--tab design-->
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
    <title>Order History</title>
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--page js and css-->
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <!--<link rel="stylesheet" href="Include/CSS/hagrassstyle.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Include/JavaScripts/Script.js"></script>
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

            <div class = "tablecontainer">
            <center class = "container">
                <h3 id = "tabletitle">My orders</h3>
                
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                <table id = "orderHistory">
                    <tr>
                        <th></th>
                        <th>Order number</th>
                        <th>Order date</th>
                        <th>Total Price</th>
                        <th>Order status</th>

                    </tr>
                    <?php
                    $ID = $_GET['ID'];
                            try {
                                $selectedorders = $conn -> query("SELECT `Order_ID`, `Order_date`, `Order_status` FROM `order` WHERE Order_ID = $ID");
                                $selecteddata = $selectedorders -> fetchAll(PDO::FETCH_ASSOC); 
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                            foreach($selecteddata as $value){
                                $totalprice = 0;
                                $orderid = $value['Order_ID'];
                                try {
                                    $selectedorderitems = $conn -> query("SELECT `Product_Name`, `Price` , `Quantity` FROM `product`, `ordered_product` WHERE `Order_ID` = $orderid AND product.Product_ID = ordered_product.Product_ID;");
                                    $selecteditems = $selectedorderitems -> fetchAll(PDO::FETCH_ASSOC); 
                                } catch (PDOException $e) {
                                    echo $e->getMessage();
                                }
                                echo "<tr>";
                                    echo "<td>";
                                    echo "<div>";
                                    foreach($selecteditems as $item){
                                        $totalprice += ($item['Price']*$item['Quantity']); 
                                        echo "<p>" . $item['Product_Name'] . " x" . $item['Quantity'] . "</p>";
                                    }
                                    echo "</div>";
                                    echo "<td>";
                                        echo $value['Order_ID'];
                                    echo "</td>";
                                    echo "<td>";
                                        echo $value['Order_date'];
                                    echo "<td>";
                                        echo $totalprice;
                                    echo "</td>";
                                    echo '<td>';
                                        echo $value['Order_status'];
                                    echo "</td>";
                                    echo '<td>';
                                        echo '<a href = "#">View order details</a>';
                                    echo '<br>';
                                        echo '<a href = "Feedback.html">Rate &#128512;</a>';
                                    echo '</td>';
                                    echo '<td><a href = "#">Reorder</a></td>';
                                echo "</tr>";

                            }
                    ?>
                </table>
                </center>
            </div>


    <div id = "recommendationsTitle">
        <h3>Recommendations</h3>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    </div>
    <center class = "container">
    <div class = "gridRecommendation">

        <div class = "itemRecommend">
            <a href = "#"><img src = "imgs/Fruits&Veggies/pngfind.com-apple-vector-png-5952311.png"></a>
            <a href = "#"><h4>Apple</h4></a>
            <p>15 EGP per kilo</p>
            <p>Shipping fees 10.00 EGP</p>
            <button class = "addtocart" onclick="document.location='cart.html'">Add to cart</button>
        </div>
        <div class = "itemRecommend">
            <a href = "#"><img src = "imgs/Fruits&Veggies/favpng_cavendish-banana-juice-cooking-banana-fruit.png"></a>
            <a href = "#"><h4>Banana</h4></a>
            <p>25 EGP per kilo</p>
            <p>Shipping fees 12.00 EGP</p>
            <button class = "addtocart" onclick="document.location='cart.html'">Add to cart</button>
        </div>
        <div class = "itemRecommend">
            <a href = "#"><img src = "imgs/Fruits&Veggies/favpng_citrus-sinensis-sweet-lemon-orange-fruit-food.png"></a>
            <a href = "#"><h4>Orange</h4></a>
            <p>15 EGP per kilo</p>
            <p>Shipping fees 10.00 EGP</p>
            <button class = "addtocart" onclick="document.location='cart.html'">Add to cart</button>
        </div>
        <div class = "itemRecommend">
            <a href = "#"><img src = "imgs/Fruits&Veggies/Lovepik_com-401520273-tomato-splashing.png"></a>
            <a href = "#"><h4>Tomato</h4></a>
            <p>15 EGP per kilo</p>
            <p>Shipping fees 10.00 EGP</p>
            <button class = "addtocart" onclick="document.location='cart.html'">Add to cart</button>
        </div>
        <div class = "itemRecommend">
            <a href = "#"><img src = "imgs/Fruits&Veggies/pngaaa.com-3510282.png"></a>
            <a href = "#"><h4>Pepper</h4></a>
            <p>15 EGP per kilo</p>
            <p>Shipping fees 10.00 EGP</p>
            <button class = "addtocart" onclick="document.location='cart.html'">Add to cart</button>
        </div>
    </div>
    </center>
    <div>
        <button id = "totop"><img src="imgs/icons/Arrow-Up-PNG-Pic.png"></button>
    </div>
<footer class="footer-distributed">

    <div class="footer-left">

        <img src="imgs/final_footer.png" alt = "footer logo">
        <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            <a href="#">Account</a>
            <a href="#">About us</a>
            <a href="#">Contact up</a>
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