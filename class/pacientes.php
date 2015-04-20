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

			echo $insert;
			
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

}

?>