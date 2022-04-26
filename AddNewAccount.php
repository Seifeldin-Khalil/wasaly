<?php
require_once "connect.php";
/*session_start();
if (!isset($_SESSION['loggedIn'])) {
    header("location: HomePage.php");
}*/

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
        
        try{
            $insertindb = $conn -> query("INSERT INTO `customer`(`F_name`, `L_name`, `Gender`, `Address`, `Mail`, `Username`, `Password`, `Phone_Number`, `age`) VALUES ('$custfname','$custlname','$gender','$Address','$Email','$username','$password','$phonenumber','$age')");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    if($insertindb){
        header('Location: Login.php');
    }

?>