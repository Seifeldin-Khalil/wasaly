<?php
    $conn = mysqli_connect("localhost", "root", "", "data");
    session_start();
    $_SESSION["CustId"] = 1;
    $_SESSION["OrderId"] = 1;
    $theOrder = $_SESSION["OrderId"];
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

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            var simple = '<?php echo $theOrder; ?>';
            $("#updateBtn").click(function(){
                $(".cartTable").empty();
                $("#test").empty();
                $(".cartTable").load("load-orderedItems.php",{
                    currentOrder :simple
                });
            });
        });

    </script>


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
            <button onclick="removeAllCartItems()" style="font-size: 15px; float: right; background-color: #9dc2f2; border-radius: 50px; padding: 4px 15px;font-family: 'Montserrat', sans-serif;">Remove All</button>
            <button id = "updateBtn" style="font-size: 15px; float: right; background-color: #9dc2f2; border-radius: 50px; padding: 4px 15px;font-family: 'Montserrat', sans-serif;">Update Cart</button>
        </div>

        <!-- Product #1 -->
            <?php
                
                /* test */
                $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

                $order = $_SESSION['OrderId'];
                $sql = "SELECT * FROM ordered_product INNER JOIN product ON product.Product_ID = ordered_product.Product_ID WHERE Order_ID = $order";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    $totalOrderPrice = 0;
                    echo '<table class = "cartTable" >';
                    while($row = mysqli_fetch_assoc($result)){
                        $rowNum = $row["Product_ID"] ;

                        echo "<tr>";
                        
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<button style = "width: 30px; height: 40px" class="delete-btn" id = ' . $rowNum . ' type="button" name="button" onclick="deleteItem(this.id)"><img src="imgs/Maii/delete-icn.svg" alt="" /></button>';
                        echo "</td>";

                        echo "<td style = 'width: 50px; padding: 10px; text-align:center'> <img src='imgs/Fruits&Veggies/redApples.kpg.jpg' alt=''/></td>";

                        echo "<td style = 'padding: 5px; text-align:left; padding-left: 15px'>";
                        echo "<h3 style = 'margin: 0px'> " . $row["Product_Name"] . "</h3>";
                        echo "</td>";

                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<button class="minus-btn" style = "width: 30px; height: 40px"; padding-top: 5px" type="button" name="button" onclick="minusQunatity()"> <img src="imgs/Maii/minus.svg" alt="" /></button>';
                        echo "</td>";
                        
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<input style = " text-align:center; width: 40px; height: 40px" type="text" name="name" value=" ' . $row["Quantity"] . ' " id="Q' . $rowNum . ' " readonly>';
                        echo "</td>";

                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo "<button class='plus-btn'  id = '" . $rowNum . "' style = 'width: 30px; height: 40px' type='button' name='button' onclick='plusQunatity(this.id)'><img src='imgs/Maii/plus.svg' alt=''/></button>";
                        echo "</td>";


                        $totalOrderPrice += ($row["Price"] * $row["Quantity"]);
                        echo "<td style = 'padding: 5px; text-align:center'>";
                        echo "<h3 style = 'margin: 0px'><div id='Item-total-price'> $ " . $row["Price"] * $row["Quantity"] . " </div> </h3>"; 
                        echo "</td>";

                        echo "</tr>";
                    }
                    echo '</table><center id = "test">
                        <div class="chckout" align="right">
                            <div class="Cartsummary">
                                <div>
                                    <div class="Subtotal">Sub-Total</div>
                                </div>
                                <div id="total-amount">';
                                    echo "$ " . $totalOrderPrice ; 
                        echo '</div>
                            </div>
                            <button class="chkoutBtn" onclick="document.location="Checkout.html"">Checkout</button>
                        </div>
                    </center></div>';
                }else{
                    $totalOrderPrice = 0;
                    echo "<table><tr><td style = 'padding: 50px;  text-align:right'> <h3> Your cart is empty </h3></td>";
                    echo "<td style = 'padding: 50px;  text-align:left'><button style='background-color: #9dc2f2;
                    border-radius: 50px; padding: 4px 15px;font-size: 16px; font-weight: 400;
                    color: #202020;' onclick='document.location='Home(assem).php''>Sart Shopping Now</button></td></tr> </table> </div>";
                }
               
            ?>
    <script>
            function deleteItem(idd) {
                // passing the product id from javascript to php through the get method form the url
                var oldUrl = "http://localhost/wasaly/cart.php";
                window.location.href = oldUrl + "?ptd=" + idd;
                <?php 
                    // setting the connection
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        // remove this item from the database ordered product table
                        $stmt = $conn->prepare("DELETE FROM `ordered_product` WHERE Order_ID = :order AND Product_ID = :prod");
                        $stmt->bindParam(':order', $orderID);
                        $stmt->bindParam(':prod', $prodToDel);
                        
                        //////*****!!!! STATIC !!!!*****////////
                        $orderID = $theOrder;
                        $prodToDel = 2;
                        $stmt->execute();

                    }
                    catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }

                    // closing the conncetion
                    $conn = null;
                ?>
            }

            function plusQunatity(idd) {
                // passing the product id from javascript to php through the get method form the url
                var oldUrl = "http://localhost/wasaly/cart.php";
                
                var text1 = "Q";
                var quantityId = text1.concat("", String(idd));

                var oldVal = parseInt(document.getElementById(quantityId).value);
                var val = oldVal + 1;
                
                window.location.href = oldUrl + "?ptd=" + idd + "&newQ=" + val ;
                document.getElementById(quantityId).value = val;

                <?php 
                    $theProd = $_GET["ptd"];
                    $theQ = $_GET["newQ"];

                    // setting the connection
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        // remove this item from the database ordered product table
                        $stmt = $conn->prepare("UPDATE `ordered_product` SET `Quantity` = :q 
                        WHERE `ordered_product`.`Ordered_product_ID` = 
                        (SELECT `ordered_product`.`Ordered_product_ID` FROM `ordered_product`
                         WHERE `ordered_product`.`Product_ID` = :prod AND `ordered_product`.`Order_ID` = :order
                        );");
                        
                        $stmt->bindParam(':order', $orderID);
                        $stmt->bindParam(':prod', $prodToEdit);
                        $stmt->bindParam(':q',  $QUpdate);
                        
                        //////*****!!!! STATIC !!!!*****////////
                        $orderID = $theOrder;
                        $prodToEdit = 500;
                        $QUpdate = $theQ;
                        $stmt->execute();

                    }
                    catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }

                    // closing the conncetion
                    $conn = null;
                ?>
                
            }
        </script>

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