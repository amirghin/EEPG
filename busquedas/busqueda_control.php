<?php

require "../class/conexion.php";
require "../class/controles.php";

$controles = new controles;

if(isset($_POST["id_paciente"])){
 	$controles = $controles->buscar_control($_POST["id_paciente"], $conexion);
 	echo $controles;
}
?>