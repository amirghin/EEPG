<?php
class usuarios{
	
	function verificar_contrasena($contrasena, $contrasena_enc){

		if($contrasena == $contrasena_enc){
			return true;
		}else{
			return false;
		}

	}

	function verificar_usuario($usuario, $contrasena, $conexion){

		try{
			$query = "SELECT  usuarios_nombre, usuarios_email, usuarios_password, roles_id FROM usuarios WHERE usuarios_nombre='{$usuario}'";
			$resultado = mysqli_query($conexion, $query);

			if(!$resultado){

				throw new Exception(mysqli_error($resultado));	
			}elseif (mysqli_num_rows($resultado) == 0){

				throw new Exception("La combinación de usuario y contraseña es incorrecta", 1);
				
			}else{

				$usuario = mysqli_fetch_assoc($resultado);
				

				if($this->verificar_contrasena($contrasena, $usuario['usuarios_password'])) {

					unset($usuario['usuarios_password']);
					return '{"paciente":'.json_encode($usuario).'}';

				}else{

					throw new Exception("La combinación de usuario y contraseña es incorrecta", 1);
					
				}
				
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