<?php

class productoClass{

		//atributos	
		public $id;
		public $nombre;
		public $estatus;
		public $precio;
		public $existencia;

	function __construct($id,$nombre,$estatus,$precio,$existencia){
		$this->id 		  = $id;
		$this->nombre 	  = $nombre;
		$this->estatus    = $estatus;
		$this->precio	  = $precio;
		$this->existencia = $existencia;
		
	}
}
