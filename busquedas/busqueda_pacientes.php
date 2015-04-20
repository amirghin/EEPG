<?php



 require "../class/conexion.php";



	$nombre_paciente = $_POST["nombre_paciente"];
	$query = "SELECT * FROM pacientes WHERE pacientes_nombre LIKE '%{$nombre_paciente}%'";
	$resultado = mysqli_query($conexion, $query);

	$array = array();

	while($row=mysqli_fetch_assoc($resultado)){
	$array[] = $row;

	}

	echo '{"pacientes":'.json_encode($array).'}';


?>