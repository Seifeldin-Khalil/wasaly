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
   
       

          
     <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
</head>

<body>
   <nav>  
        <div class="navbar2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="navbar-header">
                                <a href="#"><img class = "navimg" src = "imgs/navbar_logo.png"></a>
                            </div>                        
                            <div class="navbar-collapse collapse" id="mobile_menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="Home.html">Home</a></li>
                                    <li><a href="About.html" class="dropdown-toggle">About Us</a></li>
                                    <li><a href="User%20Fruits.html">Fruits</a></li>
                                    <li><a href="/User%20Veggies.html">Veggies</a></li>
                                    <li><a href="contact%20us.html">Contact Us</a></li>
                                </ul>
                                <ul class="nav navbar-nav">
                                    <li>
                                        <form action="" class="navbar-form">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="/User%20Account.html"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Login.html">Login</a></li>
                                            <li><a href="Sign%20Up.html">Sign us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    </nav>
    
 <div id="page-container">
   <div id="content-wrap">
     <!-- all other page content -->
   </div>
   <?php
      $name = " ";
      $email = " ";
      $phone = " ";
      $message = " "; 
      $rating = " ";
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
          if (empty($_POST["name"]))
          {
              $name = "Name is required.";
              if (empty($_POST["email"])) 
              {
                  $email = "Email is required.";
                  if (empty($_POST["phone"])) 
                  {
                      $phone = "Phone Number is required.";
                      if (empty($_POST["message"])) 
                      {
                          $message = "Message is required.";
                          if (empty($_POST["message"])) 
                          {
                              $message = "Message is required.";
                              if($_POST["rating"]== "No Rating")
                              {
                                  $rating = "You must rate your order.";
                              }
                          }
                      }
                  }
              }
          }
       }    
   ?>
<?php
if(isset($_POST ["submit"]))
{
 
        $feedback_description = $_POST['message'];
        $feedback_email = $_POST['email'];
        $feedback_name = $_POST['name'];
        $feedback_phone = $_POST['phone'];
        $feedback_rating = $_POST['rating'];
        
        try
        {
            $insertindb = $conn -> query("INSERT INTO `feedback`(`Description`, `Rating`, `name`, `email`, `phone`, `Order_ID`) VALUES ('$feedback_description','$feedback_rating','$feedback_name','$feedback_email','$feedback_phone','3')");
        }
        catch(PDOException $e)
            {
               echo 'error while inserting feedback into database';
            }    
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
                <form name = "feedback" method = "POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input name = "name"  type="text" class="field" placeholder="Your Name">


                <span> <?php echo $name ?> </span>


				<input name = "email" type="text" class="field" placeholder="Your Email">


                <span> <?php echo $email ?> </span>


				<input name = "phone" type="text" class="field" placeholder="Phone">


                <span> <?php echo $phone ?> </span>


				<textarea name = "message" placeholder="Message" class="field"></textarea>


                <span> <?php echo $message ?> </span>

                
                
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
               
				<input name = "submit" type = "submit" class="btn" value = "Send">
                    </form>
              
                    
			</div>
		</div>
	</div>
     <br>
     <br>
     <br>
      <br>
      
     
   <footer class="footer-distributed">

    <div class="footer-left">

        <img src="imgs/final_footer.png" alt = "footer logo">
        <p class="footer-links">
            <a href="Home.html" class="link-1">Home</a>
            <a href="User%20Account.html">Account</a>
            <a href="About.html">About us</a>
            <a href="contact%20us.html">Contact us</a>
        </p>

        <p class="footer-company-name">Wasaly.mart Â© 2015</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Building 30, North 90 Road, </span> 5th Settlement, New Cairo, Egypt</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+201013700990</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">Support.mart@wasaly.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About wasaly.mart</span>
            Egyptian based company established to enhance the lifestyle and health of the Egyptian community. Our main goal is to provide you with the best quality fruits and vegetables from the comfort of your own home. Your health is our priority.
        </p>

        <div class="footer-icons">

            <a href="#"><i ><img class="facebook" src = "imgs/footer_icons/facebook.png"></i></a>
            <a href="#"><i ><img class="twitter" src = "imgs/footer_icons/twitter.png"></i></a>
            <a href="#"><i ></i><img class="youtube" src = "imgs/footer_icons/youtube.png"></a>
            <a href="#"><i ><img class="instagram" src = "imgs/footer_icons/instagram.png"></i></a>

        </div>
    </div>
</footer>
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