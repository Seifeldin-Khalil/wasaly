<?php 
    require('connect.php');
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--page js and css-->
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <!--<link rel="stylesheet" href="Include/CSS/hagrassstyle.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Include/JavaScripts/Script.js"></script>
</head>
<body>

<?php include("Include/header & footer/Header.php"); ?>

    <div class = "gridorderhistory">
        
            <div class = "filter">
                <h3 id = "filterheader">Quick Search</h3>
                <input type="text" id="searchInput" onkeyup="searchInTable()" placeholder="Search for date..">
                <h3 id = "filterheader">Quick Sorting</h3>
                <input id = "filtercheck" type="radio" name = "filtername" value = "asc" style="height:15px; width:15px;"><label class = "labelfont">lower to Higher price</label>
                <br>    
                <input id = "filtercheck2" type="radio" name = "filtername" value = "desc" style="height:15px; width:15px;"><label class = "labelfont">Higher to Lower price</label>
                <br>
                <button id = "sortbutton" onclick="sortTable()">Sort</button>
            </div>
        
            <div class = "tablecontainer">
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
                            try {
                                $ID = $_SESSION['cust_ID'];
                                $selectedorders = $conn -> query("SELECT `Order_ID`, `Order_date`, `Order_status` FROM `order` where Customer_ID = $ID");
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
                                        echo '<a  onclick = ' . "show_order_history(" .$value['Order_ID'] .")" . '>View order details</a>';
                                    echo '<br>';
                                        echo "<a href=" . "Feedback.php?ID" . $value["Order_ID"] . ">Rate &#128512;</a>";
                                    echo '</td>';
                                    echo "<td><a href=" . "ReOrder.php?ID=" . $value["Order_ID"]  . ">Reorder</a></td>";
                                echo "</tr>";
                            }
                    ?>
                </table>
            </div>
        
            <div class = "ads">
                <img class = "adimage" src = "imgs/ads/ad.jfif">
                <img class = "adimage" src = "imgs/ads/ad2.jfif">
            </div>
        
    </div>
    <div id = "recommendationsTitle">
        <h3>Recommendations</h3>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    </div>
    <center class = "container">
    <div class = "gridRecommendation">
        <?php 
        try {
            $selecteproducts = $conn -> query("SELECT `Product_Name`, `Price`, `Image` FROM `product`");
            $selecteditems = $selecteproducts -> fetchAll(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        for ($i = 0; $i < 5; $i++) {
            echo '<div class = "itemRecommend">';
            echo "<a href = " . "#" ."><img src = " . "imgs/Fruits&Veggies/". $selecteditems[$i]['Image'] ."></a>";
            echo "<a href = ". "#" . "><h4>" . $selecteditems[$i]['Product_Name'] . "</h4></a>";
            echo "<p>" . $selecteditems[$i]['Price'] . " EGP per kilo</p>";
            echo "<p>Shipping fees 10.00 EGP</p>";
            echo "<button class = " . "addtocart" . " onclick=" . "document.location=" . "'cart.php'" . ">Add to cart</button>";
            echo "</div>";
        }
        ?>
 
    </div>
    </center>
    <div>
        <button id = "totop"><img src="imgs/icons/Arrow-Up-PNG-Pic.png"></button>
    </div>
    <?php include("Include/header & footer/Footer.php"); ?>
</body>

</html>
<script>
function show_order_history(ID) {

  const xhttp = new XMLHttpRequest();
  
  xhttp.onload = function() {
    document.getElementById("orderHistory").innerHTML = this.responseText;
  }
  xhttp.open("GET", "View_Order_Details.php?q="+ID);
  xhttp.send();
}
</script>