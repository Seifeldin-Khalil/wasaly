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
    
    <!--js and css-->
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src = "Include/JavaScripts/Script.js"></script>
    
    
</head>

<body>
<nav>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <div class="navbar2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="navbar-header">
                                <a href="#"><img class = "navimg" src = "imgs/navbar_logo.png"></a>
                            </div>                        
                            <div class="navbar-collapse collapse" id="mobile_menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="../Home.html">Home</a></li>
                                    <li><a href="../About.html" class="dropdown-toggle">About Us</a></li>
                                    <li><a href="../User%20Fruits.html">Fruits</a></li>
                                    <li><a href="../User%20Veggies.html">Veggies</a></li>
                                    <li><a href="../contact%20us.html">Contact Us</a></li>
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
                                    <li><a href="../cart.html">Cart</a></li>
                                    <li><a href="../Edit%20Item.html"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../Login.html">Login</a></li>
                                            <li><a href="../Sign%20Up.html">Sign us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</nav>
    <center>
        <form method = "post" action = "AddNewAccount.php" class = "formtemplate" name = "signup" onsubmit = "return signupvalidateForm()">

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
                    Already hav an account? <a href="#">Login here</a>
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
    <footer class="footer-distributed">

    <div class="footer-left">

        <img src="imgs/final_footer.png" alt = "footer logo">
        <p class="footer-links">
            <a href="#" class="link-1">Home</a>

            <a href="#">Blog</a>

            <a href="#">Pricing</a>

            <a href="#">About</a>

            <a href="#">Faq</a>

            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+1.555.555.5555</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

            <a href="#"><i ><img class="facebook" src = "imgs/footer_icons/facebook.png"></i></a>
            <a href="#"><i ><img class="twitter" src = "imgs/footer_icons/twitter.png"></i></a>
            <a href="#"><i ></i><img class="youtube" src = "imgs/footer_icons/youtube.png"></a>
            <a href="#"><i ><img class="instagram" src = "imgs/footer_icons/instagram.png"></i></a>

        </div>
    </div>
</footer>
</body>



</html>