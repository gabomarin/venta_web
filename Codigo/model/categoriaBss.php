<?php

/**
 * @package mvc
 * @subpackage model
 */

class categoriaBss extends DB {

	/**
	 * @param string $nombre
	 */
	function insertar($nombre) {
		//Cargar clase categoria
		require ('categoriaClass.php');

		//Limpiar las variables recibidas
		$nombre = parent::limpiarVariable($nombre);

		//Crear el query
		$query = "INSERT INTO 
				   categoria(nombre)
				  VALUES
				  ('$nombre')";

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if ($resultado == FALSE) {
			echo 'FALLO la consulta';
			return FALSE;
		} else {
			$id = $resultado;
			//Arreglo de categoria
			$categoria = new categoriaClass($id, $nombre);

			return $categoria;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar() {
		//Crear el query
		$query = 'SELECT
					*
				  FROM
					categoria';
		var_dump($query);
		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if (!$resultado) {
			//echo 'FALLO la consulta';

			return FALSE;
		} else {

			return $resultado;
		}
	}

	/**
	 * @param int $id del categoria
	 * @return object usuarioClass, FALSE en caso de falla
	 */

	function consultarDato($dato) {

		//Cargar clase usuario
		require ('categoriaClass.php');

		//Limpio las variables
		$dato = parent::limpiarVariable($dato);

		//Crear el query

		$query = "SELECT   producto.id, producto.nombre AS pnombre,producto.imagen, producto.estatus, producto.precio, categoria.nombre AS cnombre
					FROM `producto` INNER JOIN categoria
					WHERE
						producto.categoria_id=categoria.id
					AND
						producto.categoria_id=$dato";
		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);
		/*if (!$resultado) {

			if ($atributo != 'id')
				$temp = '"' . $dato . '"';
			else
				$temp = $dato;

			//Crear el query

			$query = "SELECT
				*
			    FROM
			    	categoria
			    WHERE 
					$atributo = $temp";
			//Ejecutar el query
			$resultado = parent::ejecutarConsulta($query);
			*/
			if (!$resultado) {
				//echo 'FALLO la consulta';
				return FALSE;
			} else {

				return $resultado;
				if ($resultado[0][$atributo] == $dato) {
					$categoria = new categoriaClass($resultado[0]['id'], $resultado[0]['nombre']);

					return $categoria;
				} else
					return FALSE;

			}
		}


		
		function modificarDato($id, $nombre) {

			//limpiar variable
			$nombre = parent::limpiarVariable($nombre);
			$query = "UPDATE
					categoria
				  SET
					nombre = '$nombre'
				  WHERE 
						id = $id";
			$resultado = parent::ejecutarConsulta($query);

			if (!$resultado)
				return FALSE;
			else
				return TRUE;

		}

	

}
?>
