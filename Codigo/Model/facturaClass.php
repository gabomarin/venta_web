<?php

class facturaClass{
	public $folio, $fecha, $cantidad, $precio, $estatus;
	

	function __construct($folio, $fecha, $cantidad, $precio, $estatus){
		$this->folio	=	$folio;
		$this->fecha	=	$fecha;
		$this->cantidad	=	$cantidad;
		$this->precio	= 	$precio;
		$this->estatus	=	$estatus;
		
	}
}
