<?php
class facturaPdfBss extends DB{
	
	function crearFactura($id_venta) {
		require('invoice.php');
		
		//Crear el query
		$query = 'SELECT
				factura.id, factura.fecha AS factura_fecha, usuario.rfc, usuario.direccion, venta.fecha, venta.total 
			  FROM
				venta,usuario,factura 
			  WHERE
				venta.usuario_id = '.$_SESSION['id'].
			' AND
				venta.usuario_id=usuario.id AND venta.id = '.$id_venta.
			' AND
				venta.factura_id = factura.id';
		
		//Ejecutar el query
		$resultado = parent:: ejecutarConsulta($query);
		$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
		$pdf->AddPage();
		$pdf->addSociete( "TD-INFORMATICA",
				  "DOMICILIO\n" .
				  "Av.Mariano Otero No.804 int. 2\nFraccionamiento Jardines del Bosque\nGuadalajara, Jalisco\nTelefono: (0133)84219731"
				   );
		$pdf->fact_dev( "Folio: ", $resultado[0]['id'] );
		$pdf->addDate( $resultado[0]['factura_fecha']);
		$pdf->addClient($_SESSION['id']);
		$pdf->addPageNumber("1");
		$pdf->addClientAdresse("DOMICILIO\n".$resultado[0]['direccion']);
		$pdf->addReglement("En Efectivo/Tarjeta de Credito");
		$pdf->addEcheance($resultado[0]['fecha']);
		$pdf->addNumTVA($resultado[0]['rfc']);
		//Cambiar letreros de numero cantidad...
		$cols=array( "NUMERO"    => 23,
			     "NOMBRE"  => 78,
			     "CANTIDAD"     => 22,
			     "PRECIO(c/u)"      => 26,
			     "TOTAL" => 30);
		$pdf->addCols( $cols);
		$cols=array( "NUMERO"    => "L",
			     "NOMBRE"  => "L",
			     "CANTIDAD"     => "C",
			     "PRECIO(c/u)"      => "R",
			     "TOTAL" => "R");
		$pdf->addLineFormat( $cols);
		$pdf->addLineFormat($cols);
		
		//consulta de los productos comprados
		$query = 'SELECT
				producto.nombre, producto.precio, detalle_venta.cantidad, detalle_venta.total FROM producto, detalle_venta, venta 
			  WHERE
				producto.id= detalle_venta.producto_id
			  AND
				venta.usuario_id= '.$_SESSION['id'].'
			  AND
				venta.id = detalle_venta.venta_id
			  AND
				venta.id = '.$id_venta;
		//Ejecutar el query
		$producto = parent:: ejecutarConsulta($query);
		
		/**** Se imprimen los datos de los productos ***/
		//Agregar datos
		$y    = 109;
		for( $i = 0 ; $i <count($producto) ; $i++ ){
			
			$line = array( "NUMERO"    => ( $i + 1 ),
				       "NOMBRE"  => $producto[$i]['nombre'],
				       "CANTIDAD"     => $producto[$i]['cantidad'],
				       "PRECIO(c/u)"   => $producto[$i]['precio'],
				       "TOTAL" => ( $producto[$i]['total'])
				       );
			$size = $pdf->addLine( $y, $line );
			$y   += $size + 2;
		}
		

		
		$tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
				    array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
		$tab_tva = array( "1"       => 19.6,
				  "2"       => 5.5);
		$pdf->addTotal($resultado[0]['total']);
		$pdf->Output("factura.pdf","I");

	}
	
}
?>