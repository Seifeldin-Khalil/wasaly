<?php
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    
    $PTD=$_GET['ptd'];
    $sign=$_GET['sign'];
    $amt=$_GET['amt'];
    $OID=$_GET['oid'];

    if($amt == 10 && $sign == "plus"){
        echo '<script>alert("Can not add more kilos. \r\nRedirecting in 3 seconds")</script>';
        header('Refresh: 3; URL=cart.php?oid='.$OID.'');
    }else if ($amt == 1 && $sign == "minus"){
        echo '<script>alert("Can not reduce more, please delete instead. \r\nRedirecting in 3 seconds")</script>';
        header('Refresh: 3; URL=cart.php?oid='.$OID.'');
    }else{
        if($sign == "plus"){
            $query = "UPDATE `ordered_product` SET `Quantity` = ($amt + 1)
            WHERE ordered_product.Product_ID = $PTD AND ordered_product.Order_ID = $OID;";
    
            $data = mysqli_query($conn, $query);
    
            if($data){
                header("Location:cart.php?oid=".$OID."");
                
            }else{
                echo "Not incremented";
            }
        }else if ($sign == "minus"){
             $query = "UPDATE `ordered_product` SET `Quantity` = ($amt - 1)
             WHERE ordered_product.Product_ID = $PTD AND ordered_product.Order_ID = $OID;";
            
            $data = mysqli_query($conn, $query);
    
            if($data){
                header("Location:cart.php?oid=".$OID."");
                
            }else{
                echo "Not incremented";
            }
        }
    }

    

    


?>