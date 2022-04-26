<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="../Include/JavaScripts/maiadaJavascript.js"></script>

    <link rel="stylesheet" href="../Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="../Include/CSS/MaiiStylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script src="Include/JavaScripts/Script.js"></script>


    <title>Manage Account</title>
</head>

<body>
    <nav>
        <div id="logo">
            <a href="Admin%20Account.html">
                <img src="../imgs/navbar_logo.png" alt="Wasaly LOGO">
            </a>
            <a id="login" href="Admin%20Account.html" class="AccBtn">
                <br> Account
            </a>
            <a href="" class="AccBtn">
                <br> Logout
            </a>
        </div>

        <div id="navigation">
            <ul class="nav2" id="nav">
                <li class="navv"> <a class="active" href="Admin%20Stock%20Management.html"><span
                            class="iconify icon:ic:baseline-flight icon-inline:false"></span> Fruits </a></li>
                <li class="navv"> <a href="Admin%20Stock%20Management%20pt2.html"><span
                            class="iconify icon:fa-solid:hotel icon-inline:false"></span> Vegetables</a></li>
                <li class="navv"> <a href="Add%20Item.html"><span
                            class="iconify icon:mdi-ferris-wheel icon-inline:false"></span> Add Product </a></li>
            </ul>
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
                                    <img src="../imgs/final_footer.png" style="width: 100%" alt="">
                                </div>
                                <h5 class="user-name">Admin Acc #203398</h5>
                            </div>
                            <div class="accountDetails">
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;"
                                    onclick="document.location='Admin Stock Management.html'">
                                    <span class="iconify" data-icon="el:home-alt" style="color: green;"></span> Manage
                                    Stock
                                </button>
                                <br>
                                <button class="accountBtn"
                                    style="background-color: grey; border-radius: 10px; width:100%; margin-bottom: 10px;"
                                    disabled>
                                    <span class="iconify" data-icon="fluent:inprivate-account-28-filled"
                                        style="color: midnightblue;"></span> Account Details
                                </button>
                                <br>
                                <button class="accountBtn"
                                    style="border-radius: 10px; width:100%; margin-bottom: 10px;">
                                    <span class="iconify" data-icon="flat-color-icons:feedback"></span> Feedbacks
                                </button>
                                <br>
                                <button class="accountBtn"
                                    style="border-radius: 10px; width:100%; margin-bottom: 10px;">
                                    <span class="iconify" data-icon="ic:baseline-connect-without-contact"
                                        style="color: indigo;"></span> Contact Reqs
                                </button>
                                <br>
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px"
                                    onclick="document.location='../Login.html'">
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
                                        <input type="text" class="form-control" id="fullName" name="Fullname"
                                            placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail" style="height: 45px"
                                            name="Email" placeholder="Enter email ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="Phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Change Password</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">Old Password</label>
                                        <input type="name" class="form-control" id="Street" placeholder="Enter Street"
                                            name="Pass">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">New Password</label>
                                        <input type="name" class="form-control" id="ciTy" placeholder="Enter City"
                                            name="newPass">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Confirm New Password</label>
                                        <input type="text" class="form-control" id="zIp" placeholder="Zip Code"
                                            name="confirmPass">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <hr>
                                        <button
                                            style="background-color: limegreen; width: 100%; margin-bottom: 15px;margin-top: 15px; padding-bottom: 30px; padding-top : 10px;"
                                            type="button" id="submit" name="submit" class="btn btn-primary"
                                            onClick="return AdminAccFormValidation()">
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

            <img src="../imgs/final_footer.png" alt="footer logo">
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
                Egyptian based company established to enhance the lifestyle and health of the Egyptian community. Our
                main goal is to provide you with the best quality fruits and vegetables from the comfort of your own
                home. Your health is our priority.
            </p>

            <div class="footer-icons">

                <a href="#"><i><img class="facebook" src="../imgs/footer_icons/facebook.png"></i></a>
                <a href="#"><i><img class="twitter" src="../imgs/footer_icons/twitter.png"></i></a>
                <a href="#"><i></i><img class="youtube" src="../imgs/footer_icons/youtube.png"></a>
                <a href="#"><i><img class="instagram" src="../imgs/footer_icons/instagram.png"></i></a>

            </div>
        </div>
    </footer>

</body>

</html>