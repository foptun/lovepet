<?php

$host = "db";
$db = "pet_db";
$u = "root";
$p = "1234";

$conn = new mysqli($host, $u, $p, $db);

if (!$conn) {
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   exit;
}else{
	// echo "connected!";
}
$query = $conn->query("SET NAMES UTF8");

?>