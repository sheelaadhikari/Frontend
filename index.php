<?php
$host = "mariadb";
$user = "testuser";
$pass = "testpassword";
$db = "mydb";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Connected successfully dsfdhgdf";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>