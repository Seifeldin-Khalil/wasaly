<?php
    $currentOrder = $_POST['currentOrder'];
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

    $sql = "SELECT * FROM ordered_product INNER JOIN product ON product.Product_ID = ordered_product.Product_ID WHERE Order_ID = $currentOrder";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $totalOrderPrice = 0;
        echo '<table class = "cartTable" >';
        while($row = mysqli_fetch_assoc($result)){
            $rowNum = $row["Product_ID"] ;

            echo "<tr>";
            
            echo "<td style = 'padding: 5px;  text-align:center'>";
            echo '<button style = "width: 30px; height: 40px" class="delete-btn" id = ' . $rowNum . ' type="button" name="button" onclick="deleteItem('. $rowNum . ', ' . $currentOrder .')"><img src="imgs/Maii/delete-icn.svg" alt="" /></button>';
            echo "</td>";

            echo "<td style = 'width: 50px; padding: 10px; text-align:center'> <img src='imgs/Fruits&Veggies/redApples.kpg.jpg' alt=''/></td>";

            echo "<td style = 'padding: 5px; text-align:left; padding-left: 15px'>";
            echo "<h3 style = 'margin: 0px'> " . $row["Product_Name"] . "</h3>";
            echo "</td>";

            echo "<td style = 'padding: 5px;  text-align:center'>";
            echo '<button class="minus-btn" style = "width: 30px; height: 40px"; padding-top: 5px" type="button" name="button" onclick="minusQunatity()"> <img src="imgs/Maii/minus.svg" alt="" /></button>';
            echo "</td>";
            
            echo "<td style = 'padding: 5px;  text-align:center'>";
            echo '<input style = " text-align:center; width: 40px; height: 40px" type="text" name="name" value=" ' . $row["Quantity"] . ' " id="Qunatity" readonly>';
            echo "</td>";

            echo "<td style = 'padding: 5px;  text-align:center'>";
            echo "<button class='plus-btn' id='PlusBtn1' style = 'width: 30px; height: 40px' type='button' name='button' onclick='plusQunatity(this.id)'><img src='imgs/Maii/plus.svg' alt=''/></button>";
            echo "</td>";


            $totalOrderPrice += ($row["Price"] * $row["Quantity"]);
            echo "<td style = 'padding: 5px; text-align:center'>";
            echo "<h3 style = 'margin: 0px'><div id='Item-total-price'> $ " . $row["Price"] * $row["Quantity"] . " </div> </h3>"; 
            echo "</td>";

            echo "</tr>";
        }
        echo '</table><br><center id = "test">
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
                var val = String(oldVal + 1);
                
                window.location.href = oldUrl + "?ptd=" + idd + "&newQ=" + val ;
                document.getElementById(quantityId).value = oldVal + 1;

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
                        $prodToEdit = $theProd;
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