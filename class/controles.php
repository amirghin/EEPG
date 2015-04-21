<?php

class controles{

public $control_id;
public $peso;
public $grasa;
public $musculo;
public $porcentajeAgua;
public $grasaVisceral;
public $edadMetabolica;
public $medidaPecho;
public $circunferenciaCint;
public $medidaCadera;
public $notas;
public $fecha;
public $imc;
public $idPaciente;


	function insertar($control_id, $peso, $grasa, $imc, $musculo, $porcentajeAgua, $grasaVisceral, $edadMetabolica, $medidaPecho, $circunferenciaCint, $medidaCadera, $notas, $fecha, $idPaciente, $conexion){
		$mensaje = "";	
		try{
			$insert = "INSERT INTO controles (
				controles_id, 
				controles_peso, 
				controles_imc, 
				controles_porc_grasa, 
				porc_musculo, 
				controles_porc_agua, 
				controles_porc_grasa_visc, 
				controles_edad_metab, 
				controles_med_pecho, 
				controles_circ_cintura, 
				controles_med_cadera, 
				controles_notas, 
				controles_fecha, 
				pacientes_id
				) values (
				{$control_id}, 
				{$peso}, 
				{$imc}, 
				{$grasa},
				{$musculo},
				{$porcentajeAgua},
				{$grasaVisceral},
				{$edadMetabolica},
				{$medidaPecho},
				{$circunferenciaCint},
				'{$medidaCadera}',
				'{$notas}',
				'{$fecha}',
				{$idPaciente})";

			$resultado = mysqli_query($conexion, $insert);
			if(!$resultado){

				throw new Exception(mysqli_error($conexion));

				//return false;
			}else{
				$this->mensaje = "insercion satisfactoria";
				
			}

		}catch(Exception $e){
	    	throw new Exception($e->getMessage());	 

		}
	}

		function buscar_control($id_paciente, $conexion){
		try{
			
			$query = "SELECT * FROM controles WHERE pacientes_id LIKE %{$id_paciente}%";
			$resultado = mysqli_query($conexion, $query);
			$array = array();
			if(!$resultado){
				throw new Exception(mysqli_error($resultado));	
			}else{
				while($row=mysqli_fetch_assoc($resultado)){
				$array[] = $row;

				}
				return 	'{"controles":'.json_encode($array).'}';

			}

		}catch (Exception $e){
			  return json_encode(array(
			  'error' => array(	
			  	'msg' => $e->GetMessage(),
			  	'error' => $e->GetCode()
			  	)
			  ));
		}
	}	

}

?>