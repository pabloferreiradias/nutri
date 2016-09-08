<?php
/*$servername = "amysql.nutremarmitaria.com.br";
$username = "nutremarmitaria";
$password = "2013nutre@tl13";
$dbname = "nutremarmitaria";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>