<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once('Model/loginBss.php');

//La clase controlador

class stdCtl{

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct(){
		$this -> modelo = new loginBss();
	}

	function ejecutar(){
		//Si no tengo parametros, listo los usuarios
		if( !isset($_REQUEST['action']) ){
			$login = $this->modelo->login($_GET['mail'],$_GET['pass']);
				//echo gettype($cadena);
				if ( $login )
					echo 'Login exitoso';
				else
					echo 'Usuario o contraseña invalidos';
		}
		else switch($_REQUEST['action']){
			case 'login':
				//$cadena = array("foo", "bar", "hallo", "world");
				$login = $this->modelo->login($_GET['mail'],$_GET['pass']);
				//echo gettype($cadena);
				if ( $login )
					echo 'Login exitoso';
				else
					echo 'Usuario o contraseña invalidos';
					//include('View/usuarioError.php');
				break;
			
				
			
		}				
		
		
	}
}

?>
