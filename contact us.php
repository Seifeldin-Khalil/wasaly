<?php 
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }
    $cust = $_SESSION['cust_ID'];
?>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="Include/JavaScripts/Script.js"></script>
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    
    <link rel="shortcut icon" type="image/x-icon" href="imgs/Home/mini%20logo.jpg" />
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <link rel="stylesheet" href="Include/CSS/MaiiStylesheet.css">

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

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>Contact Us</title>
</head>

<body>
    <?php include("Header.php"); ?>

  <div class="contactForm">
        <div class="contactFormrow">
            <div class="contactFormcolumn" style="text-align:center;">
                <img src="imgs/final_footer.png" style="width:70%; float: center;" alt="App Icon">
                <h3>Get Wasaly app and order on the go</h3>
                <p>FREE DOWNLOAD NOW!</p>
                <br>
                <h3>
                    <span class="iconify-inline" data-icon="logos:google-play" style="margin-right: 30px"></span>
                    <span class="iconify" data-icon="logos:apple-app-store"></span>
                </h3>

                <br>
                <hr>
                <br>
                <br>
                <button data-id='envelopee' class="userinfo btn btn-success">
                    <img src="imgs/subs.png" style="width:70%; float: center;" alt="App Icon">
                </button>
                

            </div>
            <div class="contactFormcolumn" style="text-align:Left;">
                <form name="ContactUS">
                    <h2 style="text-align:center">Contact Us <span class="iconify-inline" data-icon="ant-design:phone-filled" data-flip="horizontal"></span> 19339 </h2>
                    <h5 style="text-align:center">Opening hours: Everyday from 10:00 a.m. to 10:00 p.m.</h5>
                    <br>
                    <h3 style="text-align:center"> OR </h3>
                    <br>
                    <h3 style="text-align:center">Jot us a note and we’ll get back to you as quickly as possible!</h3>
                    <br>

                    <label for="fname">Name</label>
                    <input type="text" id="fname" name="firstname">

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phoneNum" name="phone">

                    <label for="desc">What's on your mind?</label>
                    <textarea id="desc" name="desc" style="height:170px"></textarea>

                    <br><br>
                    <input type="submit" value="Submit" onClick="return contactUsFormValidation()">
                </form>
            </div>
        <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'ajaxPopup.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
        </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog" style = "width: 60%; height: 60%">
                    <div class="modal-content">
                        <center>
                        <div class="modal-body">
                        </div>
                        </center>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php include("Footer.php"); ?>
    
</body>

</html>

<?php
    $conn = null; 
?>