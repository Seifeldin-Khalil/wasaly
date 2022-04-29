<?php 
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }

    $cust = $_SESSION['cust_ID'];

    $sql = "SELECT * FROM customer WHERE Customer_ID = $cust";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="Include/JavaScripts/Script.js"></script>

    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="Include/CSS/MaiiStylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg"/>
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

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        // changing current data using Ajax Load function,jQuery&php
        $(document).ready(function(){
            //check if form was submitted 
            $("form").submit(function(event){
                //disable the post action 
                event.preventDefault();

                //manually doing it using JQuery
                var name = $("#acc-name").val();
                var email = $("#acc-email").val();
                var phone = $("#acc-phone").val();
                var street = $("#acc-st").val();
                var city = $("#acc-city").val();
                var state = $("#acc-state").val();
                var zip = $("#acc-zip").val();
                var submit = $("#acc-submit").val();
                
                // results of form validation by Ajax load func will appear here
                $(".form-message").load("UserAccManage.php", {
                    // passing the input data values 
                    name: name,
                    phone: phone,
                    email: email,
                    street: street,
                    city: city,
                    state: state,
                    zip: zip,
                    submit: submit
                });
            });
        });
    </script>

    <title>My Account</title>
</head>

<body>
    <?php include("Include/header & footer/Header.php"); ?>

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
                                <h5 class="user-name"><?php echo $row["F_name"] . " " .$row["L_name"];?></h5>
                            </div>
                            <div class="accountDetails">
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;" onclick="document.location='Home(assem).php'">
                                    <span class="iconify" data-icon="el:home-alt" style="color: green;"></span> Home
                                </button>
                                <br>
                                <button class="accountBtn" style="background-color: grey; border-radius: 10px; width:100%; margin-bottom: 10px;" disabled>
                                    <span class="iconify" data-icon="fluent:inprivate-account-28-filled" style="color: midnightblue;"></span> My Account
                                </button>
                                <br>
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;" onclick="document.location='Order History.php'">
                                    <span class="iconify" data-icon="noto:package"></span> Orders
                                </button>
                                <br>
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px" onclick="document.location='logout.php'">
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
                        <form action = "UserAccManage.php" method="POST" name="UserAccountDetails">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Userame</label>
                                        <input name="name" type="text" class="form-control" id="acc-name" placeholder="<?php echo $row["Username"];?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input name="email" type="email" class="form-control" id="acc-email" style="height: 45px" placeholder="<?php echo $row["Mail"];?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="Phone" class="form-control" id="acc-phone" placeholder="<?php echo $row["Phone_Number"];?>">
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
                                        <input type="text" class="form-control" id="acc-st" placeholder="Enter Street" name="Street">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="text" class="form-control" id="acc-city" placeholder="Enter City" name="city">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" class="form-control" id="acc-state" placeholder="Enter State" name="State">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input type="text" class="form-control" id="acc-zip" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <hr>
                                        <center><p class = "form-message"></p></center>
                                        <button
                                            style="background-color: limegreen; width: 100%; margin-bottom: 5px;margin-top: 15px; padding-bottom: 10px; padding-top : 10px;"
                                            type="submit" id="acc-submit" name="submit" class="btn btn-primary">
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

    <?php include("Include/header & footer/Footer.php"); ?>
</body>

</html>