<?php

require "class/conexion.php";
require "class/usuarios.php";

$usuario = new usuarios;

if(isset($_POST["usuario"])){

	
	echo $usuario->eliminar_usuario($_POST["usuario"], $conexion);


}


?>