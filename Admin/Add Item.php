<?php 
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }
?>
<?php 
        if(!empty($_GET['error'])){
            //echo "<script> console.log(". '"Message here"'.") </script>";
            echo '<script>alert("'.$_GET['error'].'")</script>';
        }
?>

<!DOCTYPE html>
<html>

<head>
    <!--tab design-->
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/Home/mini%20logo.jpg" />
    <title>Add product</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--js and css-->
    <link rel="stylesheet" href="../Include/CSS/stylesheet.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "../Include/JavaScripts/Script.js"></script>
    
</head>

<body class = "bodystyle">
<?php include("../Include/header & footer/adminHeader.php"); ?>


    
    <center>
        <form method = "post" action = "AddNewProduct.php" name="addItem" class = "formtemplate" >

                <h1 id = "pagetitle">Add product</h1>

                <div class = "section">
                    <input type="text"  name = "prodid" placeholder="Product ID">
                </div>
                <div class = "section">
                    <input name = "prodname" type="text" placeholder="Product name">
                </div>
                <div class = "section">
                    <input name = "prodcat" type="text" placeholder="Category" >
                </div>
                <div class = "section">
                    <input name = "prodamount" type="text" placeholder="Amount">
                </div>
                <div class = "section">
                    <input name = "prodprice" type="text" placeholder="Price">
                </div>
                <div class = "insertfile">
                    <input  type="file" name = "prodimg">
                </div>
                <div class="accept-box">
                    <input type="checkbox" name="prodaccept" id="accept">
                    <label for = "accept">I am not robot</label>
                </div>
                <div>
                    <input class="addproduct" onclick = "addItemvalidateFormm()" type="submit" name="submit" value = "Add product" save>
                    <button class = "addproduct"><a href = "Admin%20Stock%20Management.php">View product</a></button>
                </div>
            
                <div class="form-btns">

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