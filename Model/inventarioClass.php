<?php

class inventarioClass{

		//atributos	
		public $id;
		public $cantidadProducto;
		public $fecha;
		public $cantidadReal;
		public $cantidadEsperada;
		public $descripcion;

	function __construct($id,$cantidadProducto,$fecha,$cantidadReal,$cantidadEsperada,$descripcion){
		$this->id 		 			 = $id;
		$this->cantidadProducto 	 = $cantidadProducto;
		$this->fecha 	 			 = $fecha;
		$this->cantidadReal 		 = $cantidadReal;
		$this->cantidadEsperada 	 = $cantidadEsperada;
		$this->descripcion		 	 = $descripcion;
	}
}
