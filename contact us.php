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
                <div class="sign-up-container">
                    <div class="envelope">
                        <div class="paper">
                            <h1 id="SubsTitle">Subscribe our Newsletter</h1>
                            <form class="sign-up-form">
                                <input type="text" placeholder="Email" class="text-input" />
                                <button type="submit" class="subsbutton">Sign up</button>
                            </form>
                        </div>
                        <div class="bottom-flap"></div>
                    </div>
                </div>

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
        </div>
    </div>

    <?php include("Footer.php"); ?>
    
</body>

</html>

<?php
    $conn = null; 
?>