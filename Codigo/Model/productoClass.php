<?php

class productoClass{

		//atributos	
		public $id;
		public $nombre;
		public $descripcion;
		public $estatus;
		public $precio;
		public $existencia;

	function __construct($id,$nombre,$descripcion,$estatus,$precio,$existencia){
		$this->id 		  = $id;
		$this->nombre 	  = $nombre;
		$this->descripcion =$descripcion;
		$this->estatus    = $estatus;
		$this->precio	  = $precio;
		$this->existencia = $existencia;
		
	}
}
