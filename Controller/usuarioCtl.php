<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once('Model/usuarioBss.php');
//La clase controlador

class usuarioCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct(){
		$this -> modelo = new usuarioBss();
	}

	function ejecutar(){
		session_start();
		//Si no tengo parametros, listo los usuarios
		if( !isset($_REQUEST['action']) ){
			if(isset($_SESSION['mail']) && $_SESSION['tipo'] == 2){//solo el encargado de ventas puede consultar los usuarios
					$usuario = $this->modelo->listar();
					if(is_array($usuario))
						include('View/usuarioListaView.php');		
					else
						echo 'Error no se pudo listar';
				}
				else {
					echo 'No tienes permisos para realizar esta accion';
				}
		}
		else switch($_REQUEST['action']){
			case 'insertar':
				if( !isset($_SESSION['mail']) || $_SESSION['tipo'] == 2 ){//un visitante y el encargado de ventas puede crear un nuevo usuario
					$usuario = $this->modelo->insertar($_REQUEST['nombre'],$_REQUEST['mail'],$_REQUEST['pass'],$_REQUEST['direccion'],$_REQUEST['rfc'],$_REQUEST['telefono'],$_REQUEST['estatus'],$_REQUEST['tipo']);
					//echo gettype($cadena);
					if ( is_object($usuario) )
						include('View/usuarioInsertadoView.php');
					else
						echo 'Error no se pudo insertar';
				}
				else {
					echo 'No tienes permisos para realizar esta accion';
				}
				break;
			case 'listar':
				if(isset($_SESSION['mail']) && $_SESSION['tipo'] == 2){//solo el encargado de ventas puede consultar los usuarios
					$usuario = $this->modelo->listar();
					if(is_array($usuario))
						include('View/usuarioListaView.php');		
					else
						echo 'Error no se pudo listar';
				}
				else {
					echo 'No tienes permisos para realizar esta accion';
				}
						
				break;
			case 'consultarDato':
					//echo $_SESSION['tipo'];
					if( isset($_SESSION['mail']) ){//cualquiera puede consultar excepto un visitante
						$usuario = $this->modelo->consultarDato($_REQUEST['dato'],$_REQUEST['atributo']);
						//var_dump($usuario);
						if(is_object($usuario))
						{
							if( $_SESSION['tipo'] == 2  ){//si es un encargado de ventas puede consultar cualquier usuario
								include('View/usuarioListaView.php');	
							}
							else if( $usuario->mail ==  $_SESSION['mail'] ){//un cliente solo puede consultar informacion propia
								include('View/usuarioListaView.php');
							} 
							else
								echo 'No tienes permisos para ver la informacion de otro usuario';
							
						}
									
						else
							echo 'Error no se pudo listar';	
					}
					else
						echo 'No tienes permisos para consultar esta informacion' ;
						
						break;
			case 'modificarDato':
						if( isset($_SESSION['mail']) && $_SESSION['tipo'] == 2  ){//si es un encargado de ventas puede modificar cualquier usuario
							$usuario = $this->modelo->modificarDato($_REQUEST['id'],$_REQUEST['dato'],$_REQUEST['atributo']);
							if($usuario == TRUE)
								echo 'El campo fue modificado exitosamente';
							else {
								echo 'El campo no pudo ser modificado';
							}	
						}
						else if( isset($_SESSION['mail']) && $_REQUEST['id'] ==  $_SESSION['id'] ){//si es un cliente solo puede modificar su informacion 
							$usuario = $this->modelo->modificarDato($_REQUEST['id'],$_REQUEST['dato'],$_REQUEST['atributo']);
							//var_dump($usuario);
							if($usuario == TRUE)
								echo 'El campo fue modificado exitosamente';
							else {
								echo 'El campo no pudo ser modificado';
							}
						} 
						else
							echo 'No tienes permisos para modificar la informacion de otro usuario';
						
						break;
			default:
					echo 'Opcion no valida. Intente de nuevo';
		}				
		
		
	}
}

?>
