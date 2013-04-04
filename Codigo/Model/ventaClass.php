<?php

class usuarioClass{

	public $id, $fecha, $total;
	

	function __construct($id, $fecha, $total){
		$this->id 		= $id;
		$this->fecha	= $fecha;
		$this->total	=$total;
	}
}
