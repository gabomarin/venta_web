<?php

/**
 * @package TD_INFORMATICA
 * @subpackage clase VentaBss
 * @author Gabriel Ortiz Valdovinos <gabrielortiz_26@hotmail.com>
 */
class facturaBss extends DB{

	/**
	 * @param string $fecha de la creacion de la venta, double $total de la venta realizada
	 * @return bool TRUE si se pudo generar la venta, FALSE en caso contrario
	 */
	function crearFactura($fecha, $cantidad, $precio, $estatus, $idVenta) {

		require ('facturaClass.php');

		//Limpiar las variables recibidas
		$fecha = parent::limpiarVariable($fecha);
		$cantidad = parent::limpiarVariable($cantidad);
		$precio = parent::limpiarVariable($precio);
		$estatus = parent::limpiarVariable($estatus);

		//Crear el query
		$query = "INSERT INTO 
					factura (fecha, cantidad, precio, estatus)
				  VALUES 
					('$fecha',
					 $cantidad,
					 $precio,
					 $estatus,
					 )";

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if ($resultado == FALSE) {
			echo 'FALLO la consulta';
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		} else {
			$folio = $resultado;
			//Cerrar la conexion
			parent::cerrar();

			$factura = new facturaClass($folio, $fecha, $cantidad, $precio, $estatus);

			return $factura;
		}

	}//Fin de generarVenta()

	/**
	 * @param int $id de la venta que se desea cancelar
	 * @return bool TRUE si se pudo generar la venta, FALSE en caso contrario
	 */
	function modificarEstatus($id, $estatus) {


		//Crear el query
		$query = "UPDATE factura
					SET estatus=$estatus
					WHERE id=$id";

		//Ejecutar el query
		$resultado =parent::ejecutarConsulta($query);

		if (!$resultado) {
			echo 'FALLO la consulta';

			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		} else {
			parent::cerrar();
			return TRUE;
		}

	}// fin de cancelarVenta()

	/**
	 * @return mixed. bool FALSE si no se realizo la consulta, venta $resultado con los datos del objeto encontrado
	 */
	function listar() {
		
		//Crear el query
		$query = 'SELECT *
					FROM  
					factura';

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

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

	function consultar($tipo, $dato, $bandera) {
		
		$tipo = parent::limpiarVariable($tipo);
		$dato = parent::limpiarVariable($dato);
		//Crear el query
		if ($bandera == false) {
			$query = "SELECT *
					FROM  
						factura
					WHERE $tipo=$dato";
		} 
		else {
			$query = "SELECT * 
					FROM factura 
					INNER JOIN venta 
					WHERE venta.usuario_id=$dato AND factura.id = venta.factura_id";

		}
		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

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