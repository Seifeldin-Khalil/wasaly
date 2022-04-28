<?php
    // validation is done here (php file) because it is more safe for sensitive data 

    // Loading original data from database 

    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }

    $AID = $_SESSION['cust_ID'];

    $sql = "SELECT * FROM customer WHERE Customer_ID = $AID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    //check if btn was clicked inside AdminAccount.php file 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];

        $address = "State: " . $state . ", City: " . $city .", Street: " .  $street .", Zip Code: " . $zip ;


        //checks if there are any empty fields left in the form
        $errorPhone = false;
        $errorEmail = false;

        // error handlers for the above defined error types 
       
        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<span style = 'color: red;'>Use a valid email address!</span>";
            $errorEmail = true;
        }
        if(!empty($phone) && strlen($phone) != 11){
            echo "<span style = 'color: red;'>Invalid phone number!</span>";
            $errorPhone = true;
        }
        else{
            $data1 = false;
            $data2 = false;
            $data3 = false;
            $data4 = false;

            if(!empty($name)){
                $query1 = "UPDATE `customer` SET `Username` = '$name' WHERE `customer`.`Customer_ID` = $AID;";
                $data1 = mysqli_query($conn, $query1);
            }

            if(!empty($city) || !empty($state) || !empty($street) || !empty($zip)){
                $query2 = "UPDATE `customer` SET `Address` = '$address' WHERE `customer`.`Customer_ID` = $AID;";
                $data2 = mysqli_query($conn, $query2);
            }

            if(!empty($phone) && $errorPhone == false){
                $query3 = "UPDATE `customer` SET `Phone_Number` = '$phone' WHERE `customer`.`Customer_ID` = $AID;";
                $data3 = mysqli_query($conn, $query3);
            }else{
                $data3 = false;
            }

            if(!empty($email) && $errorEmail == false){
                $query4 = "UPDATE `customer` SET `Mail` = '$email' WHERE `customer`.`Customer_ID` = $AID;";
                $data4 = mysqli_query($conn, $query4);
            }else{
                $data4 = false;
            }

            if($data1 || $data2 || $data3 || $data4){
                if($data4 == false && !empty($email) ){
                    echo "<span style = 'color: red;'>Use a valid email address!</span>";
                    $errorEmail = true;
                    header("Refresh:0;"); 
                }elseif($data3 == false && !empty($phone)){
                    echo "<span style = 'color: red;'>Invalid phone number!</span>";
                    $errorPhone = true;
                    header("Refresh:0;"); 
                }else{
                    echo "<span style = 'color: green;'>Changes were saved successfully!  PLEASE REFRESH </span>";
                    header("Refresh:0;");    
                }
                
            }
        }
    }else{
        echo "There was an error";
    }

?>

<script>
    $("#acc-name, #acc-email, #acc-phone, #acc-state, #acc-city, #acc-zip, #acc-street").css("box-shadow: 0 0 5px grey");

    var errorPhone = "<?php echo $errorPhone; ?>"; 
    var errorEmail = "<?php echo $errorEmail; ?>";

    // show error message in the front page 
    if(errorEmail == true){
        $("#acc-email").css("box-shadow: 0 0 5px red;");
    }
    if(errorPhone == true){
        $("#acc-phone").css("box-shadow: 0 0 5px red;");
    }
    if(errorEmpty == false && errorPhone == false ){
        $("#acc-name, #acc-email, #acc-phone, #acc-state, #acc-city, #acc-zip, #acc-street").val("");
    }
</script>