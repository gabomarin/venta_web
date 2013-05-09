<?php

/**
 * @package mvc
 * @subpackage model
 */

class categoriaBss{
	
	/**
	 * @return mixed productoClass object y en caso de falla un FALSE
	 */
	function insertar($nombre,$estatus,$precio,$existencia){
		
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
					producto';

		//Ejecutar el query
		//echo $query;
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
	 * @param int $id del producto
	 * @return object usuarioClass, FALSE en caso de falla
	 */
	function consultar($id){
		//Cargar clase usuario
		require('productoClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		if(!$conexion->conecta())
			die('No se ha podido realizar la conexion a la bd');

		//Limpio las variables
		$dato = $conexion->limpiarVariable($id);

		//echo $dato.'     ';
		//Crear el query
	
		$query = "SELECT
				*
			    FROM
			    	producto
			    WHERE 
					categoria_id = $id";

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
			return $resultado;
			
			
					
		}
	}
	function modificarDato($id,$dato,$atributo){
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		
		if( $conexion->conecta() == FALSE)
			die('No se pudo hacer conexion a la BD');
		
		//limpiar variable
		$dato = $conexion->limpiarVariable($dato);
		
		if( $atributo == 'nombre' )
			$temp = '"'.$dato.'"' ;
		else
			$temp = $dato; 
		
		$query = "UPDATE
					producto
				  SET
					$atributo = $temp
				  WHERE 
						id = $id";
		$resultado=$conexion ->ejecutarConsulta($query);
		$conexion ->cerrar();
		if(!$resultado)
			return FALSE;
		else
			return TRUE;		
				
	}
}
?>