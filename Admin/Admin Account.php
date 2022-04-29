<?php 
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }

    $AID = $_SESSION['admin_ID'];

    $sql = "SELECT * FROM admin WHERE Admin_ID = $AID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="../Include/JavaScripts/maiadaJavascript.js"></script>

    <link rel="stylesheet" href="../Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="../Include/CSS/MaiiStylesheet.css">
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/Home/mini%20logo.jpg"/>
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
                var npwd = $("#acc-npwd").val();
                var pwd = $("#acc-pwd").val();
                var cpwd = $("#acc-cpwd").val();
                var submit = $("#acc-submit").val();
                
                // results of form validation by Ajax load func will appear here
                $(".form-message").load("AdminAccManage.php", {
                    // passing the input data values 
                    name: name,
                    phone: phone,
                    email: email,
                    npwd: npwd,
                    pwd: pwd,
                    cpwd: cpwd,
                    submit: submit
                });
            });
        });
    </script>

    <title>Manage Account</title>
</head>

<body>
    <?php include("adminHeader.php"); ?>

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
                                <h5 class="user-name">Admin Acc #<?php echo $row["Admin_ID"];?></h5>
                            </div>
                            <div class="accountDetails">
                                <button class="accountBtn" style="border-radius: 10px; width:100%; margin-bottom: 10px;"
                                    onclick="document.location='Admin Stock Management.php'">
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
                                    onclick="document.location='../logout.php'">
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
                        <form action = "AdminAccManage.php" method="POST" name="AdminAccountDetails">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Username</label>
                                        <input type="text" class="form-control" id="acc-name" name="name"
                                            placeholder="<?php echo $row["Username"];?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="acc-email" style="height: 45px"
                                            name="email" placeholder="<?php echo $row["Mail"];?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" id="acc-phone"
                                            placeholder="<?php echo $row["Phone_Number"];?>" name="phone">
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
                                        <input type="password" class="form-control" id="acc-pwd" placeholder="Enter your old password"
                                            name="opass">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">New Password</label>
                                        <input type="password" class="form-control" id="acc-npwd" placeholder="Enter a new password"
                                            name="npass">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="zIp">Confirm New Password</label>
                                        <input type="password" class="form-control" id="acc-cpwd" placeholder="Rewrite new password"
                                            name="passConf">
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

    <?php include("adminFooter.php"); ?>

</body>

</html>