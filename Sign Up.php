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
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
    <title>Sign up</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--js and css-->
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src = "Include/JavaScripts/Script.js"></script>
    
    
</head>

<body>
<?php include("Include/header & footer/Header.php"); ?>
    <center>
        <form method = "post" action = "AddNewAccount.php" class = "formtemplate" name = "signup">

            <h1 id = "pagetitle">Sign Up</h1>

            <div class = "section1">
                <input placeholder="First name" name = "fname" type="text" >
                <input placeholder="Last name" name = "lname" type="text" >
            </div>
            <div class = "section">
                <input placeholder="Gender" name = "gender" type="text" >
            </div>
            <div class = "section">
                <input placeholder="E-mail" name = "email" type="email" >
            </div>
            <div class = "section">
                <input placeholder="Address" name = "address" type="text" >
            </div>
            <div class = "section">
                <input placeholder="Phone number" name = "mobile" type="text" >
            </div>
            <div class = "section">
                <input placeholder="Age" name = "age" type="text" >
            </div>
            <div class = "section">
                <input placeholder="UserName" name = "username" type="text" >
            </div>
            <div class = "section">
                <input placeholder="Password" name = "password" type="password" >
            </div>
            <div class = "section">
                <input placeholder="Reenter Password" name = "reenterpassword" type="password" >
            </div>
            <div class="accept-box">
                <input type="checkbox" name="accept" id="accept">
                <label for = "accept">I accept the <a href="#">Terms & Conditions</a></label>
            </div>
            <div>
                <input class="signup" type="submit" name="submit" value = "Sign Up" save>
            </div>
            <div class="form-btns">

                <div class="options">
                    Already hav an account? <a href="Login.php">Login here</a>
                </div>
            </div>
            <div>
                <p>Wasaly.mart © 2022</p>
            </div>
        </form>
    </center>
        <div>
        <button id = "totop"><img src="imgs/icons/Arrow-Up-PNG-Pic.png"></button>
    </div>
    <?php include("Include/header & footer/Footer.php"); ?>
</body>



</html>