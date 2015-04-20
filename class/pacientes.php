<?php

class pacientes{
	public $mensaje = "";
	
	function insertar_paciente(){

		try{
			$insert = "INSERT INTO 
			           VALUES ";	

			$resultado = mysqli_query($conexion, $insert);

			if(!$resultado){

				throw new Exception(mysqli_error($conexion));
			}else{

				$this->mensaje = "Se inserto la venta con exito";
			}
				
		}catch(Exception $e){
			$this->mensaje = $e->GetMessage();

		}
	}	


	function encriptar_contrasena($contrasena){

		$cost = array('cost' => 11);
		$encrypted = password_hash($contrasena, PASSWORD_BCRYPT, $cost);

		return $encrypted;

	}	

}

?>