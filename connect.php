<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=wasaly_db", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
