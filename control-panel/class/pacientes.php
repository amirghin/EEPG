<?php

class pacientes{
	public $mensaje = "";

	function insertar_paciente($conexion, $nombre, $apellido, $genero, $fec_nacimiento, $talla, $peso_meta, 
								$circ_muneca, $antecedentes, $padecimientos, $usuario){

		try{
			$insert = "INSERT INTO pacientes(pacientes_nombre, pacientes_apellidos, pacientes_genero, pacientes_fecha,
									pacientes_fecha_nac, pacientes_talla, pacientes_peso_meta, pacientes_circ_muneca,
									pacientes_ant_personales, pacientes_padec_familiares, usuarios_nombre)
			           VALUES ('{$nombre}', '{$apellido}', '{$genero}', CURDATE(),
			           			'{$fec_nacimiento}', {$talla}, {$peso_meta}, {$circ_muneca},
			           			'{$antecedentes}', '{$padecimientos}', '{$usuario}')";
			
			$resultado = mysqli_query($conexion, $insert);

			if(!$resultado){

				throw new Exception(mysqli_error($conexion));
			}else{

				$this->mensaje = "Se inserto el paciente con exito";
			}
				
		}catch(Exception $e){
			$this->mensaje = $e->GetMessage();

		}
	}

		function buscar_paciente($nombre_paciente, $conexion){
		try{
			$query = "SELECT * FROM pacientes WHERE pacientes_nombre LIKE '%{$nombre_paciente}%'";
			$resultado = mysqli_query($conexion, $query);
			$array = array();

			if(!$resultado){

				throw new Exception(mysqli_error($resultado));	
			}elseif(mysqli_num_rows($resultado) == 0){

				throw new Exception("No se encontraron registros para el usuario: {$nombre_paciente}", 1);
				
			}else{
				while($row=mysqli_fetch_assoc($resultado)){
				$array[] = $row;
				}
				return '{"pacientes":'.json_encode($array).'}';
			}

		}catch (Exception $e){
			  return json_encode(array(
			  'error' => array(	
			  	'msg' => $e->GetMessage(),
			  	'error' => $e->GetCode(),
			  	)
			  ));
		}
	}	

}

?>