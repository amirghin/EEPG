<?php

require "../class/conexion.php";
require "../class/usuario.php";

$usuario = new usuarios;

if(isset($_GET['username'], $_GET['password'])){

$info_usuario = $usuario->verificar_usuario($_GET['username'], $_GET['password'], $conexion);

echo $info_usuario;

}


?>