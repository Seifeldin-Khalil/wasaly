<?php 
    require('../connect.php');
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }

    if(isset($_POST['submit'])){
        
        $productID = $_POST['prodid'];
        $productName = $_POST['prodname'];
        $productCategory = $_POST['prodcat'];
        $productamount = $_POST['prodamount'];
        $productPrice = $_POST['prodprice'];
        $image = $_POST['prodimg'];
        
        $error = "";
        try{
            $formisvalid = true;
            if(empty($_POST['prodid'])){
                $error = "You must enter product ID.";
                $formisvalid = false;
            }else if(preg_match("/^[a-zA-Z]*$/", $_POST['prodid'])){
                $error = "You must enter ID in numbers";    
                $formisvalid = false;
            }
            if(empty($_POST['prodname'])){
                $error = "You must enter product Name.";
                $formisvalid = false;
            }else if(!preg_match("/^[a-zA-Z]*$/", $_POST['prodname'])){
                $error = "You must enter Name in Letters"; 
                $formisvalid = false;   
            }

            if(empty($_POST['prodcat'])){
                $error = "You must enter product Category.";
                $formisvalid = false;
            }else if($_POST['prodcat'] != 'fruits'){
                if($_POST['prodcat'] != 'veggies'){
                    $error = "Your category must be from two types(fruits & veggies)";
                    $formisvalid = false;
                }    
            }

            if(empty($_POST['prodamount'])){
                $error = "You must enter product Amount.";
                $formisvalid = false;
            }else if(preg_match("/^[a-zA-Z]*$/", $_POST['prodamount'])){
                $error = "You must enter Amount in numbers"; 
                $formisvalid = false;   
            }

            if(empty($_POST['prodprice'])){
                $error = "You must enter product Price.";
                $formisvalid = false;
            }else if(preg_match("/^[a-zA-Z]*$/", $_POST['prodprice'])){
                $error = "You must enter Price in numbers"; 
                $formisvalid = false;
            }    
            
            if(empty($_POST['prodaccept'])){
                $error = "You must verify your self.";
                $formisvalid = false;
            }    
            if($formisvalid){
                $insertindb = $conn -> query("INSERT INTO `product`(`Product_ID`, `Product_Name`, `Category`, `Amount`, `Price`, `Image`) VALUES ('$productID','$productName','$productCategory','$productamount','$productPrice', '$image')");
                if($insertindb){
                    header('Location: Admin Stock Management.php');
                }else{
                    header('Location: Add Item.php?error=' . $error);
                }
            }else{
                header('Location: Add Item.php?error=' . $error);
            }

        }catch(PDOException $e){
           echo 'error to insert the product!!!!';
        }
    }

?>