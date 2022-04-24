<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="Include/JavaScripts/Script.js"></script>

    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="Include/CSS/MaiiStylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />

    <!-- Header Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>My Account</title>
</head>

<body>
    <nav>

        <div class="navbar2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="navbar-header">
                            <a href="#"><img class="navimg" src="../wasaly/imgs/navbar_logo.png"></a>
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
    <div class="container" style="margin-top: 70px; margin-bottom: 50px">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="accountCard h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">Yuki Hayashi</h5>
                            </div>
                            <div class="accountDetails">
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;" onclick="document.location='Home.html'">
                                    <span class="iconify" data-icon="el:home-alt" style="color: green;"></span> Home
                                </button>
                                <br>
                                <button class="accountBtn" style="background-color: grey; border-radius: 10px; width:100%; margin-bottom: 10px;" disabled>
                                    <span class="iconify" data-icon="fluent:inprivate-account-28-filled" style="color: midnightblue;"></span> My Account
                                </button>
                                <br>
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;" onclick="document.location='Order History.html'">
                                    <span class="iconify" data-icon="noto:package"></span> Orders
                                </button>
                                <br>
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px" onclick="document.location='Login.html'">
                                    <span class="iconify" data-icon="icon-park:logout"></span> Logout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="accountCard h-100">
                    <div class="card-body">
                        <form name="UserAccountDetails">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input name="Fullname" type="text" class="form-control" id="fullName" placeholder="Current name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input name="Email" type="email" class="form-control" id="eMail" style="height: 45px" placeholder="Current Email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="Phone" class="form-control" id="phone" placeholder="Current Phone">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label>Email Notifications</label>
                                            <div class="custom-controls-stacked px-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                                    <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                                    <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary"> Address</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Street</label>
                                        <input type="name" class="form-control" id="Street" placeholder="Enter Street" name="Street">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="name" class="form-control" id="ciTy" placeholder="Enter City" name="city">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" class="form-control" id="sTate" placeholder="Enter State" name="State">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <hr>
                                        <button style="background-color: limegreen; width: 100%; margin-bottom: 15px;margin-top: 15px; padding-bottom: 30px; padding-top : 10px;" type="button" id="submit" name="submit" class="btn btn-primary" onClick="return UserAccFormValidation()">
                                            Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">

            <img src="imgs/final_footer.png" alt="footer logo">
            <p class="footer-links">
                <a href="Home.html" class="link-1">Home</a>
                <a href="User%20Account.html">Account</a>
                <a href="About.html">About us</a>
                <a href="contact%20us.html">Contact us</a>
            </p>

            <p class="footer-company-name">Wasaly.mart © 2015</p>
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

                <a href="#"><i><img class="facebook" src="imgs/footer_icons/facebook.png"></i></a>
                <a href="#"><i><img class="twitter" src="imgs/footer_icons/twitter.png"></i></a>
                <a href="#"><i></i><img class="youtube" src="imgs/footer_icons/youtube.png"></a>
                <a href="#"><i><img class="instagram" src="imgs/footer_icons/instagram.png"></i></a>

            </div>
        </div>
    </footer>

</body>

</html>