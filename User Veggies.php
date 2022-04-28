<?php
    session_start();
   if (!isset($_SESSION['cust_ID'])) {
       header("location: Login.php");
   }
   $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Include/CSS/SeifStyleSheet.css">
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src="Include/JavaScripts/Script.js">
    </script>
    <script script src="https://kit.fontawesome.com/74ca053b53.js" crossorigin="anonymous"></script>
    
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    
</head>

<?php include("Header.php"); ?>

    <div class="header-fruits">
        <h1 style = "text-align: center">Vegetables</h1>
    </div>

    <div class="wrapper-fruits">
        <div class="container">
            <div class="row g-1">
            <?php
                 try {
                    $selecteproducts = $conn -> query("SELECT `Product_Name`, `Price` FROM `product` WHERE Category = 'Vegetables' ");
                    $selecteditems = $selecteproducts -> fetchAll(PDO::FETCH_ASSOC); 
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                foreach ( $selecteditems as $Vegetable) {
                echo '<div class="col-md-3">';
                echo    '<div class="carddd p-3">';
                echo        '<div class="text-center"> <img src="imgs/Fruits&Veggies/favpng_cavendish-banana-juice-cooking-banana-fruit.png" width="200"> </div>';
                echo        '<div class="product-details"> <span class="font-weight-bold d-block"><center>$' . $Vegetable['Price'] .'/kg</center></span> <center><span>' . $Vegetable['Product_Name'] . '</span></center>';
                echo            '<div class="buttttons d-flex flex-row">';
                echo               '<div class="cart"><i class="fa fa-shopping-cart"></i></div> <button class="btn btn-success cart-button btn-block"><span class="dot">' . 1 .'</span>Add to cart </button>';
                echo           '</div>';
                echo       '</div>';
                echo   '</div>';
                echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>



    <?php include("Footer.php"); ?>

</body>

</html>