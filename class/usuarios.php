<?php
class usuarios{
	
	public $mensaje = "";

	function verificar_contrasena($contrasena, $contrasena_enc){

		if(password_verify($contrasena, $contrasena_enc)){
			return true;
		}else{
			return false;
		}

	}

	function encriptar_contrasena($contrasena){
		$cost = array('cost' => 11);
		$encrypted = password_hash($contrasena, PASSWORD_BCRYPT, $cost);

		return $encrypted;

	}


	function insertar_usuario($usuario , $contrasena, $email = "NULL"){


		echo "{$usuario} {$contrasena} {$email}";
		/*try{
			$insert = "INSERT INTO 
			           VALUES ";	

			$resultado = mysqli_query($conexion, $insert);

			if(!$resultado){

				throw new Exception(mysqli_error($conexion));
				return false;
			}else{

				return true;
			}
				
		}catch(Exception $e){
			$this->mensaje = $e->GetMessage();

		}*/
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