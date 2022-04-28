<?php 
    $ID = $_GET['ID'];
    require('connect.php');
    try {
    $selectedorders = $conn -> query("SELECT * FROM `order` WHERE Order_ID = $ID");
    $selecteddata = $selectedorders -> fetchAll(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) {
    echo $e->getMessage();
    }
    print_r($selecteddata);
    $Order_ID = $ID + 2001;
    $Order_date = $selecteddata[0]['Order_date'];
    $Order_status = "Pending";
    $Customer_ID = $selecteddata[0]['Customer_ID'];
    
    try{
        $insertOrder = $conn -> query("INSERT INTO `order`(`Order_ID`, `Order_date`, `Order_status`, `Customer_ID`) VALUES ('$Order_ID', '$Order_date','$Order_status','$Customer_ID')");
    }catch(PDOException $e){
       echo 'error to insert the Order!!!!';
    }

    try {
        $selectedorderitems = $conn -> query("SELECT `Order_ID`, `Product_ID`, `Quantity` FROM `ordered_product` Where `Order_ID` = $ID");
        $selecteditems = $selectedorderitems -> fetchAll(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    foreach($selecteditems as $item){
        $Order_ID = $Order_ID;
        $Product_ID = $item['Product_ID'];
        $Quantity = $item['Quantity'];

        try{
            $insertOrdered_Items = $conn -> query("INSERT INTO `ordered_product`(`Order_ID`, `Product_ID`, `Quantity`) VALUES ('$Order_ID','$Product_ID','$Quantity')");
        }catch(PDOException $e){
        echo 'error to insert the Order Items!!!!';
        }
    }
    if ($insertOrder && $insertOrdered_Items) {
        header("location: Order History.php");
    }  
?>