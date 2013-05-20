<?php

/**
 * @package mvc
 * @subpackage model
 */

class productoBss{
	
	/**
	 * @return mixed productoClass object y en caso de falla un FALSE
	 */
	function insertar($nombre,$descripcion,$estatus,$precio,$existencia, $imagen, $categoria){
		//Cargar clase usuario
		require('productoClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require_once('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		 
		if(!$conexion -> conecta())
			die('No se ha podido realizar la conexion a la bd');


		//Limpiar las variables recibidas
			$nombre		=  $conexion->limpiarVariable($nombre);
			$estatus	=  $conexion->limpiarVariable($estatus);
			$precio		=  $conexion->limpiarVariable($precio);
			$existencia	=  $conexion->limpiarVariable($existencia);
			$imagen = $conexion->limpiarVariable($imagen);
			$descripcion = $conexion->limpiarVariable($descripcion);
			

		//Crear el query
		$query ="INSERT INTO producto (nombre,descripcion, imagen, estatus, precio, existencia, categoria_id)
				VALUES ('$nombre',
					'$descripcion',
					'$imagen',
				    $estatus,
				    $precio,
					$existencia,
					'$categoria');";
		

		//Ejecutar el query
		var_dump($query);
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

			//Arreglo del producto
			$product = new productoClass($id,$nombre,$descripcion,$estatus,$precio,$existencia);
	
			return $product;
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
	function consultarDato($dato,$atributo){
		//Cargar clase usuario
		require('productoClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require_once('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		

		//Limpio las variables
		$dato = $conexion->limpiarVariable($dato);
		if( $atributo == 'nombre' )
			$temp = '"'.$dato.'"' ;
		else
			$temp = $dato; 
		//echo $dato.'     ';
		//Crear el query
	
		$query = "SELECT
				*
			    FROM
			    	producto
			    WHERE 
					$atributo = $temp";

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

			if( $resultado[0][$atributo] == $dato ){
					$product = new productoClass($resultado[0]['id'],$resultado[0]['nombre'],$resultado[0]['descripcion'],$resultado[0]['estatus'],$resultado[0]['precio'],$resultado[0]['existencia']);
					
					return $product;
				}
			else
				return FALSE;			
		}
	}
	function modificarDato($id,$dato,$atributo){
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		

		
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