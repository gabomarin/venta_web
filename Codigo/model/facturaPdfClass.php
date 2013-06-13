<?php

class facturaClass{
	public $folio;
	public $fecha;
	public $cliente;
	public $rfc;
	public $descripcion;
	public $cantidad;
	public $precio;
	public $total;
	public $domicilio;
	
	function __construct($folio, $fecha, $clinte , $rfc , $domicilio, $descripcion, $cantidad, $precio, $total){
		$this->folio		=	$folio;
		$this->fecha		=	$fecha;
		$this->cantidad		=	$cantidad;
		$this->rfc		= 	$rfc;
		$this->domicilio	= 	$domicilio;
		$this->descripcion	=	$descripcion;
		$this->cantidad		=	$cantidad;
		$this->precio		= 	$precio;
		$this->total		= 	$total;
		
	}
}
