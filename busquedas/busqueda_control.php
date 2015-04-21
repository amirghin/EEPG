<?php



 require "../class/conexion.php";


	$id_paciente = $_POST["id_paciente"];
	$query = "SELECT * FROM controles WHERE pacientes_id LIKE %{$id_paciente}%";
	$resultado = mysqli_query($conexion, $query);

	$array = array();

	while($row=mysqli_fetch_assoc($resultado)){

	$array[] = $row;

	}

	echo '{"controles":'.json_encode($array).'}';


?>