
                    <?php
                        require('connect.php');
                echo '<table id = "orderHistory">
                <tr>
                    <th></th>
                    <th>Order number</th>
                    <th>Order date</th>
                    <th>Total Price</th>
                    <th>Order status</th>

                </tr>';
                    $ID = $_GET['q'];
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
                                        echo '<a  onclick = ' . "show_order_history(" .$value['Order_ID'] .")" . '>View order details</a>';
                                    echo '<br>';
                                        echo "<a href=" . "" . ">Rate &#128512;</a>";
                                    echo '</td>';
                                    echo "<td><a href=" . "ReOrder.php?ID=" . $value["Order_ID"]  . ">Reorder</a></td>";
                                echo "</tr>";

                            }
                        echo '  </table>';
                    ?>

