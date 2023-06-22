<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "dunia-matematika";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn -> connect_errno) {
    die("Failed to connect to MySQL: " . $conn -> connect_error);
}

?>