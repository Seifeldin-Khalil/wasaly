<?php
require_once "connect.php"; 
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 


          <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
       

          
     <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
</head>

<body>
<?php include("Include/header & footer/Header.php"); ?>
    
 <div id="page-container">
   <div id="content-wrap">
     <!-- all other page content -->
   </div>
   <?php

$nameErr = $messageErr  = $phoneErr = $emailErr = $ratingErr = NULL;
$name = $message  = $phone = $email = $rating = NULL;

$flag = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $flag = false;
    } else {
        $firstname = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $flag = false;
    } else {
        $lastname = test_input($_POST["email"]);
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
        $flag = false;
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
        $flag = false;
    } else {
        $email = test_input($_POST["message"]);
    }
    if (($_POST["rating"])=="no rating") {
        $ratingErr = "Rating is required";
        $flag = false;
    } else {
        $rating = test_input($_POST["rating"]);
    }

    // submit form if validated successfully
    if ($flag) 
    {    
        $sql = "INSERT INTO `feedback`(`Description`, `Rating`, `name`, `email`, `phone`, `Order_ID`) VALUES ('$message','$rating','$name','$email','$phone' , '3')";
        // execute sql insert
        if ($conn->query($sql) == TRUE) {
            echo "<script> alert('data saved successfully');</script>";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

     	<div class="container">
		<div class="contact-box">
			<div class="left">
            <img src="imgs/Home/feedback%20page.jpg">
            </div>
			<div class="right">
				<h2>Give us your feedback</h2>
                <h3>On Order #1111</h3>
                <form name = "feedback" method = "POST">
				<input name = "name"  type="text" class="field" placeholder="Your Name">


                <span class = "validationerr"> <?= $nameErr ?> </span>


				<input name = "email" type="text" class="field" placeholder="Your Email">


                <span class = "validationerr"> <?=  $emailErr ?> </span>


				<input name = "phone" type="text" class="field" placeholder="Phone">


                <span class = "validationerr"> <?= $phoneErr ?> </span>


				<textarea name = "message" placeholder="Message" class="field"></textarea>


                <span class = "validationerr"> <?= $messageErr ?> </span>

                
                
                <h5>Rate your order</h5>   
                <select class = "field" name = "rating"> 
                    <option value="no rating">No Rating</option>
                    <span> <?php echo $rating ?> </span>
                    <option value="1 Star">1</option>
                    <option value="2 Star">2</option>
                    <option value="3 Star">3</option>
                    <option value="4 Star">4</option>
                    <option value="5 Star">5</option>
                </select>
                <span class = "validationerr"> <?= $ratingErr ?> </span>

				<input name = "submit" type = "submit" class="btn" value = "Send">
                    </form>
              
                    
			</div>
		</div>
	</div>
     <br>
     <br>
     <br>
      <br>
      
     
      <?php include("Include/header & footer/Footer.php"); ?>
 </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</body>
    <style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}
body{
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 5000px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
    display: block;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
    font-family: 'Oswald', sans-serif;
    font-weight: bold;
}
h3{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 15px;
}
        h5{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 25px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
    
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 20px;
	margin-bottom: 22px;
    text-align: center;
	transition: .3s;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: black;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size:20px;
}

.btn:hover{
    background-color: #43be9e;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
     
}
.validationerr
{
    color: red;

}
.rating-stars
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(+50%,-50%);
    direction: rtl;
            
}
        .rating-stars a
        {
            font-size: 40px;
            color: #313131;
            transition: 0.3s all;
        }
        .rating-stars a:hover
        {
            color: #f1c40f;
        }
        .star1:hover ~ a
        {
            color: #f1c40f;
        }  
        .star2:hover ~ a
        {
            color: #f1c40f;
        }
        .star3:hover ~ a
        {
            color: #f1c40f;
        }
        .star4:hover ~ a
        {
            color: #f1c40f;
        }
        .star5:hover ~ a
        {
            color: #f1c40f;
        }
        

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}
        </style>

</html>