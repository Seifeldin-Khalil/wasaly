<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
        <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasaly Mart</title>
        <link rel = "stylesheet" href="Include/CSS/stylesheet.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
      <link rel = "stylesheet" href = "Include/CSS/AssemStyleSheet.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
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
     <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Oswald:wght@200&display=swap');
</style>
      <script src="Include/JavaScripts/assem.js"></script>
  </head>
    
    <head>
    <link rel="stylesheet" href="CSS/stylesheet.css">
     <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />

</head>
  <body>
  <?php include("Include/header & footer/Header.php"); ?>
      <br><br><br><br><br>
      <center>
<div class = "slideshow">
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="imgs/Home/slide%201%20test.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imgs/Home/slide%202.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imgs/Home/slide%203.jpg" alt="">
        </div>
        <div class="slide">
          <img src="imgs/Home/slide%204.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
          <center>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
              </center>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
        <center>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
            </center>
      <!--manual navigation end-->
    </div>
    </div>
          </center>
    <!--image slider end-->

      
    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

    
      
      
      <h1 class = "home-mid-h1"> Your health is our priority   </h1>
      <p class = "home-mid-p"> Order your grocery needs from the purest farms in the middle east </p>
      
       <!-- box containers -->
      <center>
      <div class="container-home">
					
			<div class="card">
				<div class="imgBx">
					<a href="">
                        <center>
					<img src="imgs/Home/istockphoto-1003196646-612x612.jpg">
                            </center>
					</a>
				
					<br><h2 class = "home-discovery-h2">Clean Products</h2>
					<p class = "home-discovery-p"><br> We deliver our products clean and fresh, honesty is our main aspect. <br> Know more about our products.
					</p>
					
				</div>
			</div>
		
			<div class="card">
				<div class="imgBx">
					<a href="About.html">
                        <center>
					<img src="imgs/Home/about%20us.jpg"> 
                            </center>
					</a>
                    
					<br><h2 class = "home-discovery-h2">  About Us  </h2>
					<p class = "home-discovery-p"><br> Wasaly Mart aims to ensure the customer's safety by offering the best products from the purest farms to your hands.
                        <br>
                        Know more about us.
					</p>					

				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="Feedback.html">
                        <center>
					<img src="imgs/Home/feedback.jpg">
                            </center>
					</a>
					<br><h2 class = "home-discovery-h2">Give Feedback  </h2>
					<p class = "home-discovery-p"><br> We would love to know more about your experience with our products and service <br> Give Feedback.
					</p>
				</div>	
			</div>	
			
		</div>
      </center>
      
      <div class = "donwload-app">
          <div class = "download-info">
              <h2 class = download-info-h2>
              Discover the new Wasaly Mart App
              </h2>
              <p class = "download-info-p">
              Download the app and start shopping.
              </p>
            <div class = "app-icons">
                
                <img src = "imgs/Home/app%20store.png">
                <img src = "imgs/Home/googleplay%20image.png">
                
                
            </div>
              <center>
              <div class = "application-img">
                <img src = "imgs/Home/last%20homepage.jpg">
                </div>
              </center>
        </div>
      
              
          
      </div>
      
  </body>
  <?php include("Include/header & footer/Footer.php"); ?>
</html>
