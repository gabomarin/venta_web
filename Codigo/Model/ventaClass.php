<?php

class ventaClass{

	public $id, $fecha, $total, $factura_id, $usuario_id;
	

	function __construct($id, $fecha, $total, $factura_id, $usuario_id){
		$this->id 			= $id;
		$this->fecha		= $fecha;
		$this->total		=$total;
		$this->factura_id 	=$factura_id;
		$this->usuario_id	=$usuario_id;
	}
}
