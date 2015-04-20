<?php
$servername = "localhost";
$username = "root";
$db = "nutrivital";

$conexion = mysqli_connect($servername, $username, "1234", $db);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>