<?php 
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }

$ID = $_GET['ID'];
require('../connect.php');
try {
        $editproduct = $conn -> query("SELECT * FROM `Product` WHERE Product_ID = $ID");
        $editdata = $editproduct -> fetch(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    if(!empty($_GET['error'])){
        //echo "<script> console.log(". '"Message here"'.") </script>";
        echo '<script>alert("'.$_GET['error'].'")</script>';
    }
    if (isset($_POST['submit'])) {
        $ID = $_GET['ID'];
        $productID = $_POST['prodid'];
        $productName = $_POST['prodname'];
        $productCategory = $_POST['prodcat'];
        $productAmount = $_POST['prodamount'];
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
            $editinsert = $conn -> query("UPDATE `product` SET `Product_ID`='$productID',`Product_Name`='$productName',`Category`='$productCategory',`Amount`='$productAmount',`Price`='$productPrice', `Image`='$image' WHERE Product_ID = $ID");
                if($editinsert){header("location: View_Products.php");
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <!--tab design-->
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/Home/mini%20logo.jpg" />
    <title>Edit product</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--js and css-->
    <link rel="stylesheet" href="../Include/CSS/stylesheet.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../Include/JavaScripts/Script.js"></script>
</head>

<body>
<?php include("../Include/header & footer/adminHeader.php"); ?>

    
    <center>
        <form  method = "post" class = "formtemplate" name = "editForm">

                <h1 id = "pagetitle">Edit product</h1>

                <div class = "section">
                    <input name = "prodid" type="text" value = "<?php echo $editdata['Product_ID'];?>">
                </div>
                <div class = "section">
                    <input name = "prodname" type="text" value = "<?php echo $editdata['Product_Name'];?>">
                </div>
                <div class = "section">
                    <input name = "prodcat"  type="text" value = "<?php echo $editdata['Category'];?>">
                </div>
                <div class = "section">
                    <input name = "prodamount"  type="text" value = "<?php echo $editdata['Amount'];?>">
                </div>
                <div class = "section">
                    <input name = "prodprice" type="text" value = "<?php echo $editdata['Price'];?>">
                </div>
                <div class = "insertfile">
                    <input  type="file" name = "prodimg">
                </div>
                <div class="accept-box">
                    <input type="checkbox" name="prodaccept" id="accept">
                    <label for = "accept">I am not robot</label>
                </div>
                <div>
                    <input class="addproduct" onclick = "editItemvalidateForm()" type="submit" name="submit" value = "Edit product" save>
                    <button class = "addproduct"><a href = "Admin%20Stock%20Management.html">View product</a></button>
                </div>
                <div>
                    <p>Wasaly.mart © 2022</p>
                </div>
            </form>
        </center>
            
    <div>
        <button id = "totop"><img src="../imgs/icons/Arrow-Up-PNG-Pic.png"></button>
    </div>
    <?php include("../Include/header & footer/AdminFooter.php"); ?>
</body>



</html>