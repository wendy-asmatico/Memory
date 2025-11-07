<?php

$db_name = "Memory";
$servername = "localhost";
$username = "root";
$password = ""; 

try {
    $db= new PDO("mysql:host=$servername;dbname=$db_name;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
