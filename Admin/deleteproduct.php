<?php 
    session_start();
    if (!isset($_SESSION ['admin_ID'] )) {
        header("location: ../Login.php");
    }
?>
<?php
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
    
    header("location: Admin Stock Management.php");
?>