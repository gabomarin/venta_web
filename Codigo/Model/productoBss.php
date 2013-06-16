<?php

/**
 * @package mvc
 * @subpackage model
 */

class productoBss extends DB{
	
	/**
	 * @return mixed productoClass object y en caso de falla un FALSE
	 */
	function insertar($nombre,$descripcion,$estatus,$precio,$existencia, $imagen, $categoria){
		//Cargar clase usuario
		require('productoClass.php');
		

		//Limpiar las variables recibidas
			$nombre		= parent::limpiarVariable($nombre);
			$estatus	= parent::limpiarVariable($estatus);
			$precio		= parent::limpiarVariable($precio);
			$existencia	= parent::limpiarVariable($existencia);
			$imagen =parent::limpiarVariable($imagen);
			$descripcion =parent::limpiarVariable($descripcion);
			

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
		$resultado = parent::ejecutarConsulta($query);

		if($resultado == FALSE){
			echo 'FALLO la consulta';
			//Cerrar la 
			parent::cerrar();

			return FALSE;
		}
		else{
			$id = $resultado;
			//Cerrar la 
			parent::cerrar();

			//Arreglo del producto
			$product = new productoClass($id,$nombre,$descripcion,$estatus,$precio,$existencia,$imagen,$categoria);
	
			return $product;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar(){


		//Crear el query
		$query = 'SELECT
					*
				  FROM
					producto';

		//Ejecutar el query
		//echo $query;
		$resultado = parent::ejecutarConsulta($query);
		
		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la 
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la 
			parent::cerrar();

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

		//Limpio las variables
		$dato =parent::limpiarVariable($dato);
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
		$resultado = parent::ejecutarConsulta($query);
		//var_dump($resultado);
		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la 
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la 
			parent::cerrar();

			if( $resultado[0][$atributo] == $dato ){
					$product = new productoClass($resultado[0]['id'],$resultado[0]['nombre'],$resultado[0]['descripcion'],$resultado[0]['estatus'],$resultado[0]['precio'],$resultado[0]['existencia'],$resultado[0]['imagen']);
					
					return $product;
				}
			else
				return FALSE;			
		}
	}
	function modificarDato($id,$dato,$atributo){
		
		//limpiar variable
		$dato =parent::limpiarVariable($dato);
		
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
		$resultado=parent::ejecutarConsulta($query);
		parent::cerrar();
		if(!$resultado)
			return FALSE;
		else
			return TRUE;
	}
		
		
	function modificaProducto($id,$precio,$existencia, $categoria, $descripcion){
		
		//limpiar variable
		$id = parent::limpiarVariable($id);
		$precio = parent::limpiarVariable($precio);
		$existencia= parent::limpiarVariable($existencia);
		$categoria = parent::limpiarVariable($categoria);
		$descripcion = parent::limpiarVariable($descripcion);
		

		
		$query = "UPDATE
					producto
				  SET
					precio = $precio,
					existencia = $existencia,
					categoria_id = $categoria,
				    descripcion = '$descripcion'
				  WHERE 
						id = $id";
		
		$resultado=parent::ejecutarConsulta($query);
		
		parent::cerrar();
		if(!$resultado)
			return FALSE;
		else
			return TRUE;		
				
	}
}
?>
