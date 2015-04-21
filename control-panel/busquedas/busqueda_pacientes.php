<?php
require "../class/conexion.php";
require "../class/pacientes.php";

$paciente = new pacientes;

if(isset($_POST["nombre_paciente"])){
 	$pacientes = $paciente->buscar_paciente($_POST["nombre_paciente"], $conexion);
 	echo $pacientes;
}
?>