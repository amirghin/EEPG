<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'qwe123');
define('DB','nutrivital');

class database {

	function __construct() {}

	function conectDB(){
		$conn = mysql_connect(HOST,USER, PASS);

		if(empty($conn)){
			echo "Error Conectando a la BD";
			exit();
		}
	}

	function ejecutarQuery($sql){
		mysql_select_db(DB);
		$resultQuery = mysql_query($sql) or die ("Ha ocurrido un error al conectar a la base de datos:" . mysql_error() );

		while($row=mysql_fetch_array($resultQuery)) {
			$return[] = $row;
		}

		return $return;
	}

}

?>