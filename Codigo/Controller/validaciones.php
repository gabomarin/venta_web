<?php
	function isId($id){
		if( preg_match('/^(\d)+$/',$id) )
			return TRUE;
		return FALSE;
	}
	function isNombre($nombre){
		if( preg_match('/^([a-zA-Z]{2,} ?)*[a-zA-Z]{2,}$/',$nombre) )
			return TRUE;
		echo 'no deberia entrar';
		die();
		return FALSE;
	}
	function isMail($mail){
		if( preg_match('/^(_|-)?([a-zA-Z]|\d)(\w|-|(\.(\w|-)))*@([a-zA-Z]|\d)+(-([a-zA-Z]|\d))*\.([a-zA-Z]|\d)([a-zA-Z]|\d|-)*$/',$mail) )
			return TRUE;
		return FALSE;
	}
	function isPass($pass){
		if( preg_match('/^([a-zA-Z]|\d){6,}$/',$pass) )
			return TRUE;
		return FALSE;
	}
	function isRfc($rfc){
		if( preg_match('/^[a-zA-Z]{4}(\d){2}((0[1-9])|(1[1-2]))(([1-2]\d)|(3[0-1]))([a-zA-Z]|\d){3}$/',$rfc) )
			return TRUE;
		return FALSE;
	}
	function isDireccion($direccion){
		if( preg_match('/^([a-zA-Z]{2,})+( {1}([a-zA-Z]|\d)+)* #\d+(-(\d|[a-zA-Z]){1,2})?$/',$direccion) )
			return TRUE;
		return FALSE;
	}
	function isTelefono($telefono){
		if( preg_match('/^(\d){10}$/',$telefono) )
			return TRUE;
		return FALSE;
	}
	function isEstatus($estatus){
		if( preg_match('/^(0|1)$/',$estatus) )
			return TRUE;
		echo 'no deberia entrar';
		die();
		return FALSE;
	}
	function isTipo($tipo){
		if( preg_match('/^(1|2|3)$/',$tipo) )
			return TRUE;
		return FALSE;
	}
	function isPrecio($precio){
		if(preg_match('/^(\d)+(\.(\d){2})?$/', $precio))
			return TRUE;
		echo 'no deberia entrar';
		die();
		return FALSE;

	}
	function isExistencia($existencia){
		if(preg_match('/^(\d)+$/', $existencia))
			return TRUE;
		echo 'no deberia entrar';
		die();
		return FALSE;

	}
	function isImagen($imagen){
		if( $imagen == "image/jpeg" || $imagen == "image/png"){
			return TRUE;
		}
		return FALSE;
	}
	function isUsuarioAD($atributo,$dato){//verifica si el atributo pertenece a usuario y si el dato es valido para el 
		switch( strtolower($atributo)){
			case 'id':
					return isId($dato);
					break;
			case 'nombre':
					return isNombre($dato);
					break;
			case 'mail':
					return isMail($dato);
					break;
			case 'pass':
					return isPass($dato);
					break;
			case 'rfc':
					return isRfc($dato);
					break;
			case 'direccion':
					return isDireccion($dato);
					break;
			case 'telefono':
					return isTelefono($dato);
					break;
			case 'estatus':
					return isEstatus($dato);
					break;
			case 'tipo':
					return isTipo($dato);
					break;
			default:
					return FALSE;
					break;
		}
	}
	function isProductoAD($atributo,$dato){//verifica si el atributo pertenece a producto y si el dato es valido para el 
		switch( strtolower($atributo)){
			case 'id':
					return isId($dato);
					break;
			case 'nombre':
					return isNombre($dato);
					break;
			case 'estatus':
					return isEstatus($dato);
					break;
			case 'precio':
					return isPrecio($dato);
					break;
			case 'existencia':
					return isExistencia($dato);
					break;
			default:
					return FALSE;
					break;
		}
	}
	function isCategoriaAD($atributo,$dato){//verifica si el atributo pertenece a categoria y si el dato es valido para el 
		switch( strtolower($atributo)){
			case 'id':
					return isId($dato);
					break;
			case 'nombre':
					return isNombre($dato);
					break;
			default:
					return FALSE;
					break;
		}
	}
?>