<?php
require_once "../connect.php";
/*session_start();
if (!isset($_SESSION['loggedIn'])) {
    header("location: HomePage.php");
}*/

    if(isset($_POST['submit'])){
        
        $productID = $_POST['prodid'];
        $productName = $_POST['prodname'];
        $productCategory = $_POST['prodcat'];
        $productCategory = $_POST['prodamount'];
        $productPrice = $_POST['prodprice'];
        $empId =  1;
        
        try{
            $insertindb = $conn -> query("INSERT INTO `product`(`Product_ID`, `Product_Name`, `Category`, `Amount`, `Price`) VALUES ('$productID','$productName','$productCategory','$productCategory','$productPrice')");
        }catch(PDOException $e){
           echo 'error to insert the product!!!!';
        }
    }
    if(!$insertindb){
        header('Location: Add Item.php');
    }
 
?>