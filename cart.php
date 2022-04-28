<?php 
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }
    $cust = $_SESSION['cust_ID']
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

    <title>My Cart</title>
</head>

<body>
    <?php include("Header.php"); ?>

   <div class="shopping-cart" id="cartBox">
        <!-- Title -->
        <div class="carttitle">
            <span style="font-size: 32px; float:left">Shopping Bag
            </span>
            <a href = "http://localhost/wasaly/removeAllCartItems.php?oid='<?php echo $order?>'" style="font-size: 15px; float: right; background-color: #9dc2f2; border-radius: 50px; padding: 4px 15px;font-family: 'Montserrat', sans-serif;">
            Remove All</a>
           </div>

        <!-- Product #1 -->
            <?php
                
                /* test */
                $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

                $sql = "SELECT * FROM ordered_product INNER JOIN product ON product.Product_ID = ordered_product.Product_ID WHERE Order_ID = (SELECT Order_ID FROM order WHERE order.Customer_ID = $cust))";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    $totalOrderPrice = 0;
                    echo '<table class = "cartTable" >';
                    while($row = mysqli_fetch_assoc($result)){
                        $rowNum = $row["Product_ID"] ;

                        echo "<tr>";
                        
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<a href = "http://localhost/wasaly/deleteCartItem.php?ptd='.$rowNum.'&oid='.$order.'">
                        <button style = "width: 30px; height: 40px" class="delete-btn" type="button" name="button">
                            <img src="imgs/Maii/delete-icn.svg" alt="" /></button>';
                        echo "</td>";

                        echo "<td style = 'width: 50px; padding: 10px; text-align:center'> <img src='imgs/Fruits&Veggies/redApples.kpg.jpg' alt=''/></td>";

                        echo "<td style = 'padding: 5px; text-align:left; padding-left: 15px'>";
                        echo "<h3 style = 'margin: 0px'> " . $row["Product_Name"] . "</h3>";
                        echo "</td>";

                        $sign = "minus";
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<a href = "http://localhost/wasaly/cartCalcs.php?ptd='.$rowNum.'&sign='.$sign.'&amt='.$row["Quantity"].'&oid='.$order.'">
                        <button class="minus-btn" style = "width: 30px; height: 40px"; padding-top: 5px" type="button" name="button"> <img src="imgs/Maii/minus.svg" alt="" /></button>';
                        echo "</td>";
                        
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<input id = "Q'.$rowNum.'" style = " text-align:center; width: 40px; height: 40px" type="text" name="name" value=" ' . $row["Quantity"] . ' " id="Q' . $rowNum . ' " readonly>';
                        echo "</td>";

                        $sign = "plus";
                        echo "<td style = 'padding: 5px;  text-align:center'>";
                        echo '<a href = "http://localhost/wasaly/cartCalcs.php?ptd='.$rowNum.'&sign='.$sign.'&amt='.$row["Quantity"].'&oid='.$order.'">';
                        echo "<button class='plus-btn' style = 'width: 30px; height: 40px' type='button' name='button'><img src='imgs/Maii/plus.svg' alt=''/></button>";
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
                            <a href = "http://localhost/wasaly/Checkout.php?total='.$totalOrderPrice.'">
                            <button class="chkoutBtn" onclick="document.location="Checkout.html"">Checkout</button>
                        </div>
                    </center></div>';
                }else{
                    $totalOrderPrice = 0;
                    echo "<table><tr><td style = 'padding: 50px;  text-align:right'> <h3> Your cart is empty </h3></td>";
                    echo "<td style = 'padding: 50px;  text-align:left'>
                    <a href = 'http://localhost/wasaly/Home(assem).php?total=".$totalOrderPrice."'>
                    <button style='background-color: #9dc2f2;
                    border-radius: 50px; padding: 4px 15px;font-size: 16px; font-weight: 400;
                    color: #202020;' onclick='document.location='Home(assem).php''>Sart Shopping Now</button></td></tr> </table> </div>";
                }
               
            ?>

    <?php include("Footer.php"); ?>
</body>


</html>