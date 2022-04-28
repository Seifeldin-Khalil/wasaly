<?php
    // validation is done here (php file) because it is more safe for sensitive data 

    // Loading original data from database 
    $conn = mysqli_connect("localhost", "root", "", "wasaly_db");

    $_SESSION["AdminID"] = 1;
    $AID = $_SESSION["AdminID"];
    
    $sql = "SELECT * FROM admin WHERE Admin_ID = $AID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    //check if btn was clicked inside AdminAccount.php file 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $npwd = $_POST['npwd'];
        $cpwd = $_POST['cpwd'];

        //checks if there are any empty fields left in the form
        $errorEmpty = false;
        $errorEmail = false;
        $errorPwd = false;
        $errorMatch = false;
        $errorPhone = false;

        // error handlers for the above defined error types 
        if(empty($pwd)){
            echo "<span style = 'color: red;'>Enter your pasword first to make the changes!</span>";
            $errorEmpty = true;
        }
        elseif ($pwd != $row["Password"]){
            echo "<span style = 'color: red;'>Incorrect old password!</span>";
            $errorPwd = true;
        }
        elseif($npwd != $cpwd){
            echo "<span style = 'color: red;'>Password confirmation does not match!</span>";
            $errorMatch = true;
        }
        elseif(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<span style = 'color: red;'>Use a valid email address!</span>";
            $errorEmail = true;
        } 
        elseif(!empty($phone) && strlen($phone) != 11){
            echo "<span style = 'color: red;'>Invalid phone number!</span>";
            $errorPhone = true;
        }
        else{
            $data1 = false;
            $data2 = false;
            $data3 = false;
            $data4 = false;

            if(!empty($name)){
                $query1 = "UPDATE `Username` = '$name' WHERE `admin`.`Admin_ID` = $AID;";
                $data1 = mysqli_query($conn, $query1);
            }
            if(!empty($npwd) && !empty($cpwd)){
                if($pwd != $npwd){
                    $query2 = "UPDATE `admin` SET `Password` = '$npwd' WHERE `admin`.`Admin_ID` = $AID;";
                    $data2 = mysqli_query($conn, $query2);
                }else{
                    $data2 = false;
                }
            }

            if(!empty($phone) && $errorPhone == false){
                $query3 = "UPDATE `admin` SET `Phone_Number` = '$phone' WHERE `admin`.`Admin_ID` = $AID;";
                $data3 = mysqli_query($conn, $query3);
            }else{
                $data3 = false;
            }

            if(!empty($email) && $errorEmail == false){
                $query4 = "UPDATE `admin` SET `Mail` = '$email' WHERE `admin`.`Admin_ID` = $AID;";
                $data4 = mysqli_query($conn, $query4);
            }else{
                $data4 = false;
            }

            if($data1 || $data2 || $data3 || $data4){
                if($data2 == false && (!empty($npwd) && !empty($cpwd))){
                    echo "<span style = 'color: red;'>Same passwords! NO CHANGES WERE MADE </span>";
                    header("Refresh:0;");    
                }elseif($data3 == false && !empty($phone)){
                    echo "<span style = 'color: red;'>Invalid phone number!</span>";
                    $errorPhone = true;
                    header("Refresh:0;"); 
                }elseif($data4 == false && !empty($email)){
                    echo "<span style = 'color: red;'>Use a valid email address!</span>";
                    $errorEmail = true;
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
    $("#acc-name, #acc-email, #acc-phone,#acc-npwd, #acc-cpwd, #acc-pwd").css("box-shadow: 0 0 5px grey");

    var errorEmpty = "<?php echo $errorEmpty; ?>"; 
    var errorEmail = "<?php echo $errorEmail; ?>";
    var errorMatch = "<?php echo $errorMatch; ?>";
    var errorPwd = "<?php echo $errorPwd; ?>";
    var errorPhone = "<?php echo $errorPhone; ?>"; 

    // show error message in the front page 
    if(errorEmpty == true){
        $("#acc-name, #acc-email, #acc-phone,#acc-npwd, #acc-cpwd, #acc-pwd").css("box-shadow: 0 0 5px red;");
    }
    if(errorEmail == true){
        $("#acc-email").css("box-shadow: 0 0 5px red;");
    }
    if(errorMatch == true){
        $("#acc-npwd, #acc-cpwd").css("box-shadow: 0 0 5px red;");
    }
    if(errorPwd == true){
        $("#acc-pwd").css("box-shadow: 0 0 5px red;");
    }
    if(errorPhone == true){
        $("#acc-phone").css("box-shadow: 0 0 5px red;");
    }
    if(errorEmpty == false && errorEmail == false && errorPwd == false && errorMatch == false && errorPhone == false ){
        $("#acc-name, #acc-email, #acc-phone,#acc-npwd, #acc-cpwd, #acc-pwd").val("");
    }
</script>