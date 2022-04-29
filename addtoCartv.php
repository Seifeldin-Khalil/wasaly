<?php
    static $i = 200;
    session_start();
    $id = $_SESSION["cust_ID"];
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    $date = date("Y/m/d");
    $PID=$_GET['ptd'];
    
    $OID = pow($i,2)+$PID+$date;


    if(!isset($_SESSION['order_ID'])){
    $query = "INSERT INTO `order`(`Order_ID`, `Order_date`, `Order_status`, `Customer_ID`) VALUES ('$OID','$date','Pending','$id')";
    $data = mysqli_query($conn, $query);
    $_SESSION['order_ID']= $OID;
    }

    if(isset($_SESSION['order_ID'])){
        $sessid = $_SESSION['order_ID'];
        $query = "INSERT INTO `ordered_product`(`Order_ID`, `Product_ID`, `Quantity`) VALUES ('$sessid','$PID','1')";
        $data = mysqli_query($conn, $query);
        echo "<script>alert('Item added Succesfully');</script>";
        header('Refresh: 0;User Veggies.php');
    }
?>