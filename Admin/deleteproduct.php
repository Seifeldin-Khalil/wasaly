<?php
/*session_start();
if (!isset($_SESSION['loggedIn'])) {
    header("location: HomePage.php");
}*/
  require('../connect.php');
  if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
    } else {
        $ID = 0;
    }
    try {
        $deleteproduct = $conn -> query("DELETE FROM `Product` WHERE Product_ID = $ID");
        } catch (PDOException $e) {
        echo $e->getMessage();
    }

    header("location: view_Products.php");
?>