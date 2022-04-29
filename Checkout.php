<?php
    require('connect.php');

    $cityErr = $addErr = $postalErr = $cNameErr = $cvvErr = $expErr = "";
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["City"])) {
    $cityErr = "City is required";
  }
  if (empty($_POST["Address"])) {
    $addErr = "Address is required";
  }
  if (empty($_POST["postal"])) {
    $postalErr = "postal code is required";
  }
  if (empty($_POST["cName"])) {
    $cNameErr = "Credit card name is required";
  }
  if (empty($_POST["cvv"])) {
    $cvvErr = "Cvv is required";
  }
  if (empty($_POST["Expiry"])) {
    $expErr = "Expiry date is required";
  }
}
else{

}

session_start();
   /*if (!isset($_SESSION['cust_ID'])) {
       header("location: Login.php");
   }*/
   $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Include/CSS/SeifStyleSheet.css">
    <link rel="stylesheet" href="Include/CSS/stylesheet.css">
    <script src="Include/JavaScripts/Script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
    <body>
       
        <?php include("Header.php");?>

        <center>
<form name="Checkout" method = "post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "formtemplate-checkout">
    <h1>Check-Out</h1>
                Credit Card <input type="checkbox" onclick="javascript:yesnoCheck();" name="yes" id="yesCheck"> Cash <input type="checkbox" onclick="javascript:yesnoCheck();" name="no" id="noCheck"><br>

        <div class = "section-checkout">
                <input name="City" placeholder="City" type="text" >
                <span> <?php echo $cityErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="Address" placeholder="Address" type="text" >
                <span> <?php echo $addErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="postal" placeholder="Post/zip code" type="text" >
                <span> <?php echo $postalErr;?></span>
            <br><br>
            </div>

    <div id="ifYes" style="visibility:hidden">
        <div class = "section-checkout">
                <input name="cName"placeholder="Card Holder Name" type="text" >
                <span> <?php echo $cNameErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="cvv" placeholder="CVV" type="text" >
                <span> <?php echo $cvvErr;?></span>
            <br><br>
            </div>
            <div class = "section-checkout">
                <input name="Expiry" placeholder="Expiry Date" type="text" >
                <span> <?php echo $expErr;?></span>
            <br><br>
            </div>
    </div>
    <div>
                <input class="checkout-button" type="submit" name="submit" value = "Checkout">
            </div>
            </form>
        </center>

        <script>
            $(document).ready(function(){
    $(".checkout-button").hover(function(){
  $(this).css({"background-color": "green"});
  },function(){
  $(this).css({"background-color": "#3b4440"});
});
});
        </script>

<?php include("Footer.php"); ?>

</body>
</html>
