<?php

require 'dataBase.php'; 

class user {

	function __construct() {}

	function verifyAccount($user, $pw){
		$dbUser = new database();
		$dbUser->conectDB();

		$sql = "SELECT roles_roles_id FROM usuario WHERE usuarios_nombre = '$user' and usuarios_password = '$pw'";

		$dataUser = $dbUser->ejecutarQuery($sql);

		if(count($dataUser)>=1){
			return $dataUser;
		}else{
			return 0;
		}

	}

}

?>