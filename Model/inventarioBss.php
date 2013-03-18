<?php

/**
 * @package mvc
 * @subpackage model
 */

class inventarioBss{
	
	/**
	 * @param string $nombre
	 * @param string $mail
	 * @param string $pass encriptado md5
	 * @param int $privilegio indica el perfil de permisos
	 * @return mixed inventarioClass object y en caso de falla un FALSE
	 */
	function insertar($cantidadProducto,$fecha,$cantidadReal,$cantidadEsperada,$descripcion){
		//Cargar clase inventario
		require('inventarioClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		 
		if(!$conexion -> conecta())
			die('No se ha podido realizar la conexion a la bd');


		//Limpiar las variables recibidas
			$cantidadProducto		=  $conexion->limpiarVariable($cantidadProducto);
			$fecha					=  $conexion->limpiarVariable($fecha);
			$cantidadReal			=  $conexion->limpiarVariable($cantidadReal);
			$cantidadEsperada		=  $conexion->limpiarVariable($cantidadEsperada);
			$descripcion			=  $conexion->limpiarVariable($descripcion);

		//Crear el query
		$query = "INSERT INTO 
				   inventario(cantidadProducto,fecha,cantidadReal,cantidadEsperada,descripcion)
				  VALUES
				  ($cantidadProducto,
				   '$fecha',
				    $cantidadReal,
					$cantidadEsperada,
					'$descripcion')";

		//Ejecutar el query
		//echo $query.'   ';
		$resultado = $conexion -> ejecutarConsulta($query);

		if($resultado == FALSE){
			echo 'FALLO la consulta';
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			$id = $resultado;
			//Cerrar la conexion
			$conexion -> cerrar();

			//Arreglo del inventario
			$inventario = new inventarioClass($id,$cantidadProducto,$fecha,$cantidadReal,$cantidadEsperada,$descripcion);
	
			return $inventario;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar(){
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		if(!$conexion-> conecta())
			die('LIST. No se ha podido realizar la conexion a la bd');

		//Crear el query
		$query = 'SELECT
					*
				  FROM
					inventario';

		//Ejecutar el query
		$resultado = $conexion -> ejecutarConsulta($query);

		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			$conexion -> cerrar();

			return $resultado;			
		}
	}

	/**
	 * @param int $id del inventario
	 * @return object inventarioClass, FALSE en caso de falla
	 */
	function consultarDato($dato,$tipo){
		//Cargar clase inventario
		require('inventarioClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		if(!$conexion->conecta())
			die('No se ha podido realizar la conexion a la bd');

		//Limpio las variables
		$dato = $conexion->limpiarVariable($dato);
		if( $tipo == 'fecha' || $tipo == 'descripcion')
			$temp = '"'.$dato.'"' ;
		else
			$temp = $dato; 
		//echo $dato.'     ';
		//Crear el query
	
		$query = "SELECT
				*
			    FROM
			    	inventario
			    WHERE 
					$tipo = $temp";

		//Ejecutar el query
		$resultado = $conexion -> ejecutarConsulta($query);
		//var_dump($resultado);
		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			$conexion -> cerrar();

			if( $resultado[0][$tipo] == $dato ){
					$inventario = new inventarioClass($resultado[0]['id'],$resultado[0]['cantidadProducto'],$resultado[0]['fecha'],$resultado[0]['cantidadReal'],$resultado[0]['cantidadEsperada'],$resultado[0]['descripcion']);
					
					return $inventario;
				}
			else
				return FALSE;
		}			
	}

}

?>