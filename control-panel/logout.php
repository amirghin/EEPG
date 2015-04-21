<?php
session_start();

unset($_SESSION["active_user"]);
unset($_SESSION["active_user_rol"]);

header ("Location: index.php");

?>