<?php

/**
 * @package mvc
 * @subpackage model
 */

class inventarioBss extends DB{
	
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
		
		//Limpiar las variables recibidas
			$cantidadProducto		=  parent::limpiarVariable($cantidadProducto);
			$fecha					=  parent::limpiarVariable($fecha);
			$cantidadReal			=  parent::limpiarVariable($cantidadReal);
			$cantidadEsperada		=  parent::limpiarVariable($cantidadEsperada);
			$descripcion			=  parent::limpiarVariable($descripcion);

		//Crear el query
		$query = "INSERT INTO 
				   inventario(cantidadProducto,fecha,cantidadReal,cantidadEsperada,descripcion,usuario_id)
				  VALUES
				  ($cantidadProducto,
				   '$fecha',
				    $cantidadReal,
					$cantidadEsperada,
					'$descripcion',$_SESSION[id])";

		//Ejecutar el query
		//echo $query.'   ';
		$resultado = parent::ejecutarConsulta($query);
		if($resultado == FALSE){
			echo 'FALLO la consulta';
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			$id = $resultado;
			//Cerrar la conexion
			parent::cerrar();

			//Arreglo del inventario
			$inventario = new inventarioClass($id,$cantidadProducto,$fecha,$cantidadReal,$cantidadEsperada,$descripcion);
	
			return $inventario;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar(){
		
		//Crear el query
		$query = 'SELECT
				inventario.id,
				inventario.fecha,
				inventario.cantidadProducto,
				inventario.cantidadReal,
				inventario.cantidadEsperada,
				inventario.descripcion,
				usuario.nombre
			  FROM
				usuario,inventario
			  WHERE usuario.id=inventario.usuario_id';

		//Ejecutar el query
		$resultado =parent::ejecutarConsulta($query);

		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			parent::cerrar();

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
		
		
		//Limpio las variables
		$dato = parent::limpiarVariable($dato);
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
		$resultado = parent::ejecutarConsulta($query);
		//var_dump($resultado);
		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			parent::cerrar();
			return $resultado;

		}			
	}

}

?>
