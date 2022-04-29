<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

    if(isset($_POST['Login'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $sql = "SELECT * FROM customer WHERE Username ='$username' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)  > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION ['username'] = $row ['username'];
            $_SESSION ['cust_ID'] = $row ['Customer_ID'];
            header("Location: Home(assem).php");
        }
        else{
            echo "<script> alert('Username or Password incorrect.')</script>";
        }

        $sql = "SELECT * FROM admin WHERE Username ='$username' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)  > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION ['username'] = $row ['username'];
            $_SESSION ['admin_ID'] = $row ['Admin_ID'];
            header("Location: Admin/Admin Account.php");
        }
        else{
            echo "<script> alert('Username or Password incorrect.')</script>";
        }
    }




?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Include/CSS/SeifStyleSheet.css">
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <body>
    <?php include("Include/header & footer/Header.php"); ?>
    
        <div class="register-photo">
    <div class="form-container">
        <div class="image-holder"><img src="imgs/cart.png" alt="Shopping Cart"></div>
        <form method="post" action=" " >
            <h2 class="text-center"><strong>Welcome back!</strong></h2>
            <div class="form-group"><input class="form-control" type="Username" name="Username" placeholder="Username"></div>
            
            <div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password"></div>
            
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Remember me </label> </div>
                    <div> <a href="#" class="text-info">Forgot Password</a> </div>
                </div>
            </div>
            <div class="form-group"><button name = "Login" class="btn btn-success btn-block btn-info" >Login </button></div><a class="already" href="#">Terms of Use and Privacy Policy</a>
        </form>
    </div>
</div>

<?php include("Include/header & footer/Footer.php"); ?>

</body></html>
