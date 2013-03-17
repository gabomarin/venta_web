<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once('Model/usuarioBss.php');

//La clase controlador

class usuarioCtl{

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct(){
		$this -> modelo = new usuarioBss();
	}

	function ejecutar(){
		//Si no tengo parametros, listo los usuarios
		if( !isset($_REQUEST['action']) ){
			//Obtengo los datos que se van a listar
			$usuarios = $this->modelo->listar();
			
			//Muestro los datos
			include('View/usuarioListaView.php');
		}
		else switch($_REQUEST['action']){
			case 'insertar':
				//$cadena = array("foo", "bar", "hallo", "world");
				$usuario = $this->modelo->insertar($_REQUEST['nombre'],$_REQUEST['mail'],$_REQUEST['pass'],$_REQUEST['direccion'],$_REQUEST['rfc'],$_REQUEST['telefono'],$_REQUEST['estatus'],$_REQUEST['tipo']);
				//echo gettype($cadena);
				if ( is_object($usuario) )
					include('View/usuarioInsertadoView.php');
				else
					echo 'Error no se pudo insertar';
					//include('View/usuarioError.php');
				break;
			case 'listar':
					$usuario = $this->modelo->listar();
					if(is_array($usuario))
						include('View/usuarioListaView.php');		
					else
						echo 'Error no se pudo listar';	
					break;
			case 'consultarDato':
						$usuario = $this->modelo->consultarDato($_REQUEST['dato'],$_REQUEST['tipo']);
						if(is_object($usuario))
							include('View/usuarioListaView.php');		
						else
							echo 'Error no se pudo listar';	
						break;
			case 'modificarDato':
						$usuario = $this->modelo->modificarDato($_REQUEST['id'],$_REQUEST['dato'],$_REQUEST['atributo']);
						if($usuario == TRUE)
							echo 'El campo fue modificado exitosamente';
						else {
							echo 'El campo no pudo ser modificado';
						}
						break;
		}				
		
		
	}
}

?>
