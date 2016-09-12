<?php
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
ini_set('default_charset', 'UTF-8');


$servername = "http://mysql103.prv.f1.k8.com.br/";
$username = "nutremarmitaria";
$password = "2013nutre@tl13";
$dbname = "nutremarmitaria";

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutri";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>