<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start();
$_SESSION["CustId"] = 1;
$_SESSION["OrderId"] = 1;

$sql = "SELECT * FROM ordered_product INNER JOIN product ON product.Product_ID = ordered_product.Product_ID WHERE Order_ID = " . $_SESSION["OrderId"] . ";";
try {
    $proddatainsert = $conn->query($sql);
    $insertdata = $proddatainsert->fetchAll(PDO::FETCH_ASSOC);

}
catch (PDOException $e) {
    echo $e->getMessage();
}
$conn = null;
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,follow" />

    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
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
            <span style="font-size: 32px; float:left">Shopping Bag
            </span>
            <button onclick="removeAllCartItems()" style="font-size: 15px; float: right; background-color: #9dc2f2; border-radius: 50px; padding: 8px 30px;font-family: 'Montserrat', sans-serif;">Remove All</button>
        </div>

        <!-- Product #1 -->
        
        <table class = "cartTable" >
            <?php
               
                foreach ($insertdata as $value) {
                    $rowNum = $value["Product_ID"] ;

                    echo "<tr id = " . $rowNum . " >";
                    
                    echo "<td style = 'padding: 5px;  text-align:center'>";
                    echo '<button style = "width: 30px; height: 40px" class="delete-btn" id = ' . $rowNum . ' type="button" name="button" onclick="deleteItem(this.id)"><img src="imgs/Maii/delete-icn.svg" alt="" /></button>';
                    echo "</td>";

                    echo "<td style = 'width: 50px; padding: 10px; text-align:center'> <img src='imgs/Fruits&Veggies/redApples.kpg.jpg' alt=''/></td>";

                    echo "<td style = 'padding: 5px; text-align:left; padding-left: 15px'>";
                    echo "<h3 style = 'margin: 0px'> " . $value["Product_Name"] . "</h3>";
                    echo "</td>";

                    echo "<td style = 'padding: 5px;  text-align:center'>";
                    echo '<button class="minus-btn" style = "width: 30px; height: 40px"; padding-top: 5px" type="button" name="button" onclick="minusQunatity()"> <img src="imgs/Maii/minus.svg" alt="" /></button>';
                    echo "</td>";
                    
                    echo "<td style = 'padding: 5px;  text-align:center'>";
                    echo '<input style = " text-align:center; width: 40px; height: 40px" type="text" name="name" value=" ' . $value["Quantity"] . ' " id="Qunatity" readonly>';
                    echo "</td>";

                    echo "<td style = 'padding: 5px;  text-align:center'>";
                    echo "<button class='plus-btn' id='PlusBtn1' style = 'width: 30px; height: 40px' type='button' name='button' onclick='plusQunatity(this.id)'><img src='imgs/Maii/plus.svg' alt=''/></button>";
                    echo "</td>";

                    echo "<td style = 'padding: 5px; text-align:center'>";
                    echo "<h3 style = 'margin: 0px'><div id='Item-total-price'> $ " . $value["Price"] * $value["Quantity"] . " </div> </h3>"; 
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </table>

        <script>
            function deleteItem(idd) {
                // passing the product id from javascript to php through the get method form the url
                var oldUrl = window.location.href;
                window.location.href = "" + window.location.href + "?ptd=" + idd;
                <?php 
                    $prodToDel = $_GET["ptd"];
                    $orderID = $_SESSION["OrderId"];

                    // setting the connection
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }
                    
                    // remove this item from the database ordered product table
                    $delsql = "DELETE FROM `ordered_product` WHERE Order_ID = 1 AND Product_ID = 2";
                    try {
                        $deleteproduct = $conn -> query($delsql);
                        // refresh the page to view results 
                    }
                    catch (PDOException $e) {
                        echo $e->getMessage();
                    }

                    // closing the conncetion
                    $conn = null;
                ?>


                // update order's total amount after orderedProduct's deletion
                window.location.href = "" + oldUrl;
                
            }
        </script>

        <center>
            <div class="chckout" align="right">
                <div class="Cartsummary">
                    <div>
                        <div class="Subtotal">Sub-Total</div>
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