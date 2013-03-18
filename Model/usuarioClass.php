<?php

class usuarioClass{

		//atributos	
		public $id;
		public $nombre;
		public $mail;
		public $pass;
		public $direccion;
		public $rfc;
		public $telefono;
		public $estatus;
		public $tipo;

	function __construct($id,$nombre,$mail,$pass,$direccion,$rfc,$telefono,$estatus,$tipo){
		$this->id 		 = $id;
		$this->nombre 	 = $nombre;
		$this->mail 	 = $mail;
		$this->pass 	 = $pass;
		$this->direccion = $direccion;
		$this->rfc 		 = $rfc;
		$this->telefono  = $telefono;
		$this->estatus   = $estatus;
		$this->tipo		 = $tipo;
		
	}
}
