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
                <li class="navv"> <a class="active" href="Admin%20Stock%20Management.html"><span class="iconify icon:ic:baseline-flight icon-inline:false"></span> Fruits </a></li>
                <li class="navv"> <a href="Admin%20Stock%20Management%20pt2.html"><span class="iconify icon:fa-solid:hotel icon-inline:false"></span> Vegetables</a></li>
                <li class="navv"> <a href="Add%20Item.html"><span class="iconify icon:mdi-ferris-wheel icon-inline:false"></span> Add Product </a></li>
            </ul>
        </div>
    </nav>



    <center>
        <div class="jumbotron" style="width: 70%; margin-top: 30px;">
            <center>
                <span class="badge badge-dark" style="text-align: center; padding-right: 20px; width: 45%; margin-bottom: 50px; float:left; margin-left: 30px;">
                    <h1 style="text-align: center; letter-spacing: 8px">&nbsp; Fruits</h1>
                </span>
                <span class="badge badge-light" style="text-align: center; padding-right: 20px; width: 45%; margin-bottom: 50px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);" onclick="document.location='Admin Stock Management pt2.html'" id="test11">
                    <h1 style="padding-right: 0px; text-align: center; letter-spacing: 8px;">&nbsp; Vegetables</h1>
                </span>
            </center>

            <p></p>
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-sm-4">
                    <div class="stockcard" style="">
                        <img class="card-img-top" src="../imgs/Fruits&Veggies/lemon.png" alt="Card image cap" width="128" height="200">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Lemon</h4>
                            <h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ 28.00<br></h5>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><button type="button" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</button><button type="button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X</button> </div>
                        </div>
                    </div>
                    <h3></h3>
                </div>
                <div class="col-sm-4 col-5">
                    <div class="stockcard" style=""> <img class="card-img-top" src="../imgs/Fruits&Veggies/pngfind.com-apple-vector-png-5952311.png" width="128" height="200">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Apple</h4>
                            <h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ 32.00<br></h5>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><button type="button" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</button><button type="button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="text-decoration-style: dashed;">
                    <div class="stockcard" style="text-decoration-line: none; text-decoration-style: wavy;"> <img class="card-img-top" src="../imgs/Fruits&Veggies/favpng_cavendish-banana-juice-cooking-banana-fruit.png" alt="Card image cap" width="128" height="200">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Banana</h4>
                            <h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ 12.00<br></h5>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><button type="button" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</button><button type="button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X</button> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-sm-4">
                    <div class="stockcard" style=""> <img class="card-img-top" src="../imgs/Fruits&Veggies/mango.png" alt="Card image cap" width="128" height="200">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Mango</h4>
                            <h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ 65.00<br></h5>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><button type="button" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</button><button type="button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-5">
                    <div class="stockcard" style="text-decoration-line: none; text-decoration-style: wavy;"> <img class="card-img-top" src="../imgs/Fruits&Veggies/strawberry.png" alt="Card image cap" width="128" height="200">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Strawberry</h4>
                            <h5 style="margin-top: 15px; margin-bottom: 20px;text-align: center">$ 23.00<br></h5>
                            <div class="btn-group-vertical" role="group" aria-label="Basic example" style="width: 100%;"><button type="button" class="btn btn-secondary btn-sm btn-outline-info" style="font-size: 20px; width: 100%; font-weight: 200; text-align: center; float: right; margin-bottom: 10.6px;">Edit</button><button type="button" class="btn btn-secondary btn-sm btn-outline-warning" style="float: right; width: 100%; font-size: 20px;">X</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
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
                Egyptian based company established to enhance the lifestyle and health of the Egyptian community. Our main goal is to provide you with the best quality fruits and vegetables from the comfort of your own home. Your health is our priority.
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