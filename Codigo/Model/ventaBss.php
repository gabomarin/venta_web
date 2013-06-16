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
	
	//inserta los productos al detalle de venta
	function insertarDetalle($productoId,$ventaId,$cantidad,$total)
	{
		
		//El producto se pasa como  id_prod: X, aqui se descompone a solo X
	 	//var_dump( $productoId);
		$productoId= substr($productoId, strripos($productoId, " "));
		//echo $productoId;
		
		
		$query= "INSERT INTO detalle_venta(`producto_id`,`venta_id`,`total`, `cantidad`)
			VALUES( $productoId,$ventaId,$total,$cantidad)";
		//$query= "INSERT INTO
		//			detalle_venta ('producto_id','venta_id','total', 'cantidad')
		//			VALUES($productoId,$ventaId,$total,$cantidad)";
					
					
		//echo $query;
					
		$resultado = parent::ejecutarConsulta($query);
		//var_dump($resultado);
		
		if($resultado===0)
		{
			return 0;
		}
		
		else
		{
			return 1;
		}
		//echo $resultado;
		//die();
		
		
	}
	
	
	
	
	function generarVenta($venta, $usuarioId, $fecha) {

		require ('ventaClass.php');

		//Conectarse a la base de datos
		//require ('dbdata.inc');
		//require_once('dbClass.php');
		
		//Limpiar las variables recibidas
		//$fecha = 		parent::limpiarVariable($fecha);
		$fecha= trim($fecha);
		//$total = 		parent::limpiarVariable($total);
		//$facturaId	= 	parent::limpiarVariable($facturaId);
		$usuarioId 	=	parent::limpiarVariable($usuarioId);
		//$cantidad = parent::limpiarVariable($cantidad);
		//var_dump($fecha);
		
		//$this->total	=$total;var_dump($venta);
		//die();
		
		
		$cantidad=0;
		
		for($i=1;$i<$venta['itemCount']+1;++$i)
		{
			$cantidad+=(int)$venta["item_quantity_$i"];
			//echo  $venta["item_quantity_$i"];
		}
		
		//echo $cantidad;
		//die();
		
		
		
		$error=0;
		//parent::ejecutarConsulta("BEGIN");//comienza la transaccion
		$query = "INSERT INTO `factura` ( `fecha`, `estatus`)
				VALUES ('$fecha', '1');";
		//
		//$query= "INSERT INTO
		//			factura(`fecha`, `precio` , `estatus`, `cantidad`)
		//		VALUES ($fecha, $venta[total], 1, $cantidad)";
		//		
				//echo $query;
				//die();
				
				
		$resultado= parent::ejecutarConsulta($query);
		
		if(!$resultado)
		{
			$error=1;
			die("Error 1");
		}

		$query= "SELECT id
			FROM
				factura
			WHERE
			id = ( SELECT MAX( id ) FROM factura )";
		$id= 	parent::ejecutarConsulta($query);
		$factura_id= $id[0]['id'];
		
		
		//var_dump($id);
		if(!$id)
		{
			$error=2;
			die("error 2");
				
		}
		
				//die("ASDASD");
		//Crear el query
		$query = "INSERT INTO 
					venta (fecha, total, factura_Id, usuario_Id)
				  VALUES 
					('$fecha',
					 '$venta[total]',
					 $factura_id,
					 '$usuarioId')";
					 
					 //echo $query;

		//Ejecutar el query
		$ventaId = parent::ejecutarConsulta($query);
		
		/*echo($resultado);
		die();*/

		if(!$ventaId)
		{
			$error=3;
			die("Error 3");
		}
		
		//SE verifican los errores
		if ($error>0) {
		
			parent::ejecutarConsulta("ROLLBACK");
			//echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			//echo $error;
			//die();
			return FALSE;
		}
		else{
			parent::ejecutarConsulta("COMMIT");
			
		}
		
		parent::ejecutarConsulta("BEGIN");
		
		for($i=1;$i<(int)$venta['itemCount']+1;++$i)
		{
			$cantidad=0;
			$cantidad+=(int)$venta["item_quantity_$i"];
			$total= (int)($venta["item_quantity_$i"]*$venta["item_price_$i"]);
			//var_dump()$venta["item_options_$i"];
			$error= $this->insertarDetalle($venta["item_options_$i"],$ventaId, $cantidad,$total);
			
		}
		
		
		//Se verifica si hubo errores para cancelar las consultas
		if ($error===1) {

			parent::ejecutarConsulta("ROLLBACK");
			//echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			//echo $error;
			//die("error");
			return FALSE;
		} 
		else {
			
			parent::ejecutarConsulta("COMMIT");
			//Cerrar la conexion
			parent::cerrar();

			//venta
			$venta = new ventaClass($ventaId, $fecha, $total,$factura_id, $_SESSION['id']);

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
		$query = 'SELECT 
				venta.id, venta.fecha, venta.total,usuario.nombre
			  FROM
				venta, usuario
			  WHERE
				usuario.id = venta.usuario_id';

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
	function listarCompra($id) {
		
		
			
		//Crear el query
		$query = 'SELECT
				venta.id,venta.factura_id, venta.fecha,venta.total
			   FROM
				venta
			   WHERE
				venta.usuario_id='.$id;

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