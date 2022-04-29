<?php 
    session_start();
    if (!isset($_SESSION['cust_ID'])) {
        header("location: Login.php");
    }
?>
<?php
require_once "connect.php";

    if(isset($_POST['submit'])){
        
        $custfname = $_POST['fname'];
        $custlname = $_POST['lname'];
        $gender = $_POST['gender'];
        $Email = $_POST['email'];
        $Address = $_POST['address'];
        $phonenumber = $_POST['mobile'];
        $age =  $_POST['age'];
        $username =  $_POST['username'];
        $password =  $_POST['password'];
        $error = "";
        try{
        $formisvalid = true;
            if(empty($_POST['fname'])){
                $error = "You must enter your first name";
                $formisvalid = false;
            }else if(!preg_match("/^[a-zA-Z]*$/", $_POST['fname'])){
                $error = "You must enter first name in letters";    
                $formisvalid = false;
            }
            if(empty($_POST['lname'])){
                $error = "You must enter your last name";
                $formisvalid = false;
            }else if(!preg_match("/^[a-zA-Z]*$/", $_POST['lname'])){
                $error = "You must enter first name in letters"; 
                $formisvalid = false;   
            }

            if(empty($_POST['gender'])){
                $error = "You must enter gender.";
                $formisvalid = false;
            }else if($_POST['gender'] != 'male'){
                if($_POST['gender'] != 'female'){
                    $error = "Your gender must be from two types(male or female)";
                    $formisvalid = false;
                }    
            }

            if(empty($_POST['email'])){
                $error = "Email must be filled out";
                $formisvalid = false;
            }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error = "Does not have mail format"; 
                $formisvalid = false;   
            }

            if(empty($_POST['address'])){
                $error = "Address must be filled out";
                $formisvalid = false;
            }   
            
            if(empty($_POST['mobile'])){
                $error = "phone number must be filled out";
                $formisvalid = false;
            }else if(preg_match("/^[a-zA-Z]*$/", $_POST['mobile'])){
                $error = "phone number must in numbers";
                $formisvalid = false;
            } 

            if(empty($_POST['age'])){
                $error = "Not a number or number less than 0";
                $formisvalid = false;
            } else if(preg_match("/^[a-zA-Z]*$/", $_POST['age'])){
                $error = "Not a number or number less than 0";
                $formisvalid = false;
            } 

            if(empty($_POST['username'])){
                $error = "Username must be filled out";
                $formisvalid = false;
            } 

            if($_POST['password'] != $_POST['reenterpassword']){
                $error = "Password retype does not match";
                $formisvalid = false;
            }
            if(empty($_POST['accept'])){
                $error = "You must accept Terms & Conditions";
                $formisvalid = false;
            }     
            if($formisvalid){
                $insertindb = $conn -> query("INSERT INTO `customer`(`F_name`, `L_name`, `Gender`, `Address`, `Mail`, `Username`, `Password`, `Phone_Number`, `age`) VALUES ('$custfname','$custlname','$gender','$Address','$Email','$username','$password','$phonenumber','$age')");
                if($insertindb){
                    header('Location: Login.php');
                }
            }else {
                header('Location: Sign Up.php?error=' . $error);
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


?>