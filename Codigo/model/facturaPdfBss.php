<?php
class facturaPdfBss extends DB{
	
	function crearFactura($id) {
		require('../factura/invoice.php');
		//$folio,$fecha,$cliente,$rfc,$descripcion, $cantidad, $precio, $total
		//Crear el query
		$query = 'SELECT
				venta.factura_id, venta.fecha, usuario.rfc,producto.descripcion,producto.precio,venta.total, detalle_venta.cantidad
			   FROM
				venta, detalle_venta,producto,usuario
			   WHERE
				venta.id = detalle_venta.venta_id
				AND
				producto.id=detalle_venta.producto_id
				AND venta.usuario_id='.$id;

		//Ejecutar el query
		$resultado = parent:: ejecutarConsulta($query);

		if (!$resultado) {
			echo 'FALLO la consulta';

			//Cerrar la conexion
			parent::cerrar();
			die();
		} 
		
		
		$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
		$pdf->AddPage();
		$pdf->addSociete( "TD-INFORMATICA",
				  "DOMICILIO\n" .
				  "75000 PARIS\n".
				  "R.C.S. PARIS B 000 000 007\n"
				   );
		$pdf->fact_dev( "Numero de Folio", $folio );
		$pdf->addDate( $fecha);
		$pdf->addClient($cliente);
		$pdf->addPageNumber("1");
		$pdf->addClientAdresse("Av.Mariano Otero No.804 int. 2\nFraccionamiento Jardines del Bosque\Guadalajara, Jalisco\nTelefono: (0133)84219731");
		$pdf->addReglement("En Efectivo/Tarjeta de Credito");
		$pdf->addEcheance("03/12/2003");
		$pdf->addNumTVA("FR888777666");
		/*Cambiar letreros de numero cantidad...*/
		$cols=array( "NUMERO"    => 23,
			     "DESCRIPCION"  => 78,
			     "CANTIDAD"     => 22,
			     "PRECIO"      => 26,
			     "MONTO TOTAL" => 30);
		$pdf->addCols( $cols);
		$cols=array( "NUMERO"    => "L",
			     "DESCRIPCION"  => "L",
			     "CANTIDAD"     => "C",
			     "PRECIO"      => "R",
			     "MONTO TOTAL" => "R");
		$pdf->addLineFormat( $cols);
		$pdf->addLineFormat($cols);
		/*Agregar datos*/
		$y    = 109;
		$line = array( "NUMERO"    => "REF1",
			       "DESCRIPCION"  => "Carte Mère MSI 6378\n" .
						 "Processeur AMD 1Ghz\n" .
						 "128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo",
			       "CANTIDAD"     => "1",
			       "PRECIO"      => "600.00",
			       "MONTO TOTAL" => "600.00");
		$size = $pdf->addLine( $y, $line );
		$y   += $size + 2;
		
		$line = array( "NUMERO"    => "REF2",
			       "DESCRIPCION"  => "Câble RS232",
			       "CANTIDAD"     => "1",
			       "PRECIO"      => "10.00",
			       "MONTO TOTAL" => "60.00");
		$size = $pdf->addLine( $y, $line );
		$y   += $size + 2;
		
		$tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
				    array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
		$tab_tva = array( "1"       => 19.6,
				  "2"       => 5.5);
		$pdf->addTotal();
		$pdf->Output("cosa.pdf");

	}


}
?>