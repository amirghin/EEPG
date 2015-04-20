<?php
$servername = "localhost";
$username = "sys_nutrivital";
$db = "nutrivital";
$password ='nutrivital';

$conexion = mysqli_connect($servername, $username, $password, $db);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>