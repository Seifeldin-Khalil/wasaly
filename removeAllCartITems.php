<?php
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    
    $OID=$_GET['oid'];

    $query = "DELETE FROM `ordered_product` WHERE `Order_ID` = $OID;";
    $data = mysqli_query($conn, $query);

    if($data){
        header("Location:cart.php?oid=".$OID."");
        
    }else{
        echo "Not Deleted";
    }


?>