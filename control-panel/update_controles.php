<?php

$mensaje = "";
$id_control = $_GET["id_control"];
$id_paciente = $_GET["id_paciente"];
$peso = $_GET["peso"];
$imc = $_GET["imc"];
$grasa=$_GET["grasa"];
$musculo=$_GET["musculo"];
$agua=$_GET["agua"];
$grasa_visceral=$_GET["grasa_visceral"];
$edad_meta=$_GET["edad_meta"];
$pecho=$_GET["pecho"];
$cintura=$_GET["cintura"];
$cadera=$_GET["cadera"];
$nota=$_GET["nota"];
$fecha=$_GET["fecha"];

require "class/conexion.php";
require "class/controles.php";

try{
    $control = new controles;
    $control->modificar_control($id_control, $peso, $grasa, $imc, $musculo, $agua, $grasa_visceral, $edad_meta, $pecho, $cintura,         $cadera, $nota, $fecha, id_paciente, $conexion);
    $mensaje = $control->mensaje;
   
}catch(Exception $e){
    $mensaje = $e->GetMessage();
}

//print_r($_GET);

//$parts = parse_url($url);
//echo $id_paciente;

?>

