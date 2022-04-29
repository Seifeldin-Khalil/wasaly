<?php 
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }
?>
<!DOCTYPE html>
<?php
require "../connect.php"; 
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="../imgs/Home/mini%20logo.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="../Include/CSS/MaiiStylesheet.css">
    <link rel="stylesheet" href="../Include/CSS/stylesheet.css">
    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="Include/JavaScripts/Script.js"></script>

    
    <title>Stock Management</title>
</head>
<?php include("../Include/header & footer/adminHeader.php"); ?>
<body>
   
    <center>
        <div class="jumbotron" style="width: 70%; margin-top: 30px;">
            <center>
                <span class="badge badge-dark" style="text-align: center; padding-right: 20px; width: 45%; margin-bottom: 50px; float:left; margin-left: 30px;">
                    <h1 style="text-align: center; letter-spacing: 8px">&nbsp; Fruits</h1>
                </span>
                <span class="badge badge-light" style="text-align: center; padding-right: 20px; width: 45%; margin-bottom: 50px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);" onclick="document.location='Admin Stock Management pt2.php'" id="test11">
                    <h1 style="padding-right: 0px; text-align: center; letter-spacing: 8px;">&nbsp; Vegetables</h1>
                </span>
            </center>

            <p></p>
            <div class="row" style="margin-bottom: 0px;">
            <?php
            try {
                $proddatainsert = $conn -> query("SELECT * FROM `product` WHERE `Category` = 'fruits'");
                $insertdata = $proddatainsert -> fetchAll(PDO::FETCH_ASSOC); 
            } catch (PDOException $e) 
            {
                echo $e->getMessage();
            }
            foreach($insertdata as $value)
            {  

                echo '<div class="col-sm-4">';
                echo '<div class="stockcard" style="margin-bottom: 30px;">';
                    echo '<img class="card-img-top" src="../imgs/Fruits&Veggies/'.$value['Image'].'" alt="Card image cap" width="128" height="200">';
                    echo '<div class="card-body">';
                        echo '<h4 class="card-title" style="text-align: center">'.$value['Product_Name'].'</h4>';
                        echo '<h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ '.$value['Price'].'<br></h5>';
                        echo '<div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><a href = "'."EditItem.php?ID=" . $value["Product_ID"] .'" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</a>';
                        echo "<a href=" . "deleteproduct.php?ID=" . $value["Product_ID"] .'  name = "delete-button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X </a> </div>';
                    echo '</div>';
                echo'</div>';
        echo'</div>';

            }        
            ?>
          
        </div>
    </center>
    
</body>
<?php include("../Include/header & footer/AdminFooter.php"); ?>
</html>
