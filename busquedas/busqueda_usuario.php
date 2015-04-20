<?php

require "../class/conexion.php";
require "../class/usuarios.php";

$usuario = new usuarios;

if(isset($_POST['username'], $_POST['password'])){

	$info_usuario = $usuario->verificar_usuario($_POST['username'], $_POST['password'], $conexion);

	echo $info_usuario;

}elseif(isset($_POST['username'])){

	$existe = $usuario->existencia_usuario($_POST['username'], $conexion);
	echo $existe;

}




?>