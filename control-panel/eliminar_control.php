<?php

require "class/conexion.php";
require "class/controles.php";

$control = new controles;

if(isset($_POST["controles_id"])) {
	echo $control->eliminar_control($_POST["controles_id"], $conexion);

}


?>