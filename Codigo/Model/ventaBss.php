<?php

/**
 * @package TD_INFORMATICA
 * @subpackage clase VentaBss
 * @author Gabriel Ortiz Valdovinos <gabrielortiz_26@hotmail.com>
 */
class ventaBss extends DB {

	/**
	 * @param string $fecha de la creacion de la venta, double $total de la venta realizada
	 * @return bool TRUE si se pudo generar la venta, FALSE en caso contrario
	 */
	function generarVenta($fecha, $total,$facturaId, $usuarioId) {

		require ('ventaClass.php');

		//Conectarse a la base de datos
		//require ('dbdata.inc');
		//require_once('dbClass.php');
		
		//Limpiar las variables recibidas
		$fecha = 		parent::limpiarVariable($fecha);
		$total = 		parent::limpiarVariable($total);
		$facturaId	= 	parent::limpiarVariable($facturaId);
		$usuarioId 	=	parent::limpiarVariable($usuarioId);


		//Crear el query
		$query = "INSERT INTO 
					venta (fecha, total, factura_Id, usuario_Id)
				  VALUES 
					('$fecha',
					 '$total',
					 '$facturaId',
					 '$usuarioId')";

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if ($resultado == FALSE) {
			echo 'FALLO la consulta';
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		} 
		else {
			$id = $resultado;
			//Cerrar la conexion
			parent::cerrar();

			//venta
			$venta = new usuarioClass($id, $fecha, $total);

			return $venta;
		}

	}//Fin de generarVenta()

	/**
	 * @param int $id de la venta que se desea cancelar
	 * @return bool TRUE si se pudo generar la venta, FALSE en caso contrario
	 */
	function cancelarVenta($id) {


		$id = parent::limpiarVariable($id);
		//Crear el query
		$query = "DELETE FROM venta
					WHERE id=$id";

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if (!$resultado) {
			echo 'FALLO la consulta';

			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		} else {
			$conexion -> cerrar();
			return TRUE;
		}

	}// fin de cancelarVenta()

	
	/**
	 * 
	 * @return mixed. bool FALSE si no se realizo la consulta, venta $resultado con los datos del objeto encontrado
	 */
	function listar() {
		
		
			
		//Crear el query
		$query = 'SELECT *
					FROM  
					venta';

		//Ejecutar el query
		$resultado = parent:: ejecutarConsulta($query);

		if (!$resultado) {
			echo 'FALLO la consulta';

			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		} else {
			//Cerrar la conexion
			parent::cerrar();

			return $resultado;
		}

	}//Fin de listar
	
	/**
	 * @param string $tipo atributo de la entidad, string $dato que se desea comparar
	 * @return mixed. bool FALSE si no se realizo la consulta, venta $resultado con los datos del objeto encontrado
	 */

	function consultar($tipo, $dato) {
		
		require ('ventaClass.php');
		//Conectarse a la base de datos



		//Crear el query
		$query = "SELECT *
					FROM  
					venta
					WHERE $tipo = $dato";

		//Ejecutar el query
		$resultado =parent::ejecutarConsulta($query);

		if (!$resultado) {
			echo 'FALLO la consulta';
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		} else {
			//Cerrar la conexion
			parent::cerrar();

			return $resultado;
		}
		
		

	}//Fin de consultar()

}//Fin de la clase ventaBss
?>