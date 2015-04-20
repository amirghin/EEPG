<?php
class usuario{

public $mensaje = "";

	function verificar_usuario($usuario, $contrasena, $conexion){

		try{
			$query = "SELECT  usuarios_email, usuarios_password, roles_id FROM usuarios WHERE usuarios_nombre='{$usuario}'";
			$resultado = mysqli_query($con, $query);

			if(!$resultado){

				throw new Exception(mysqli_error($resultado));	
			}elseif (mysqli_num_rows($resultado) == 0){

				throw new Exception("El usuario no existe");
				
			}else{

				$usuario = mysqli_fetch_assoc($resultado);
			}
		


		}catch (Exception $e){
			 $this->mensaje = $e->GetMessage();
		}


	}

}



?>