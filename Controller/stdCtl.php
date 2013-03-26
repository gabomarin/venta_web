<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('Model/loginBss.php');

//La clase controlador

class stdCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct() {
		$this -> modelo = new loginBss();
	}

	function ejecutar() {
		
		session_start();
		//opcion por default
		if (!isset($_REQUEST['action'])) {
			if (!isset($_SESSION['mail'])) {
				$user = $this -> modelo -> login($_GET['mail'], $_GET['pass']);
				//var_dump($user);
				//echo gettype($cadena);
				if (is_array($user)) {
					if( $user[0]['estatus'] == 1  ){
								//Se hace el login
								$_SESSION['id'] = $user[0]['id'];
								$_SESSION['nombre'] = $user[0]['nombre'];
								$_SESSION['mail'] = $user[0]['mail'];
								$_SESSION['pass'] = $user[0]['pass'];
								$_SESSION['rfc'] = $user[0]['rfc'];
								$_SESSION['direccion'] = $user[0]['direccion'];
								$_SESSION['telefono'] = $user[0]['telefono'];
								$_SESSION['estatus'] = $user[0]['estatus'];
								$_SESSION['tipo'] = $user[0]['tipo'];
								echo 'Has iniciado Correctamente!';
										
					} 
					else 
						echo 'cuenta inactiva. Porfavor contacte al administrador de cuentas.';

				}
				else
					echo 'Usuario o contraseña invalidos';
				
			} 
			else {
				echo 'Ya iniciaste sesion eres: '.$_SESSION['nombre'];
			}
		} 
		else{
			switch($_REQUEST['action']) {
				case 'login' :
					if (!isset($_SESSION['mail'])) {
						$user = $this -> modelo -> login($_GET['mail'], $_GET['pass']);
						//var_dump($user);
						//echo gettype($cadena);
						if ( is_array( $user ) ) {
							if( $user[0]['estatus'] == 1  ){
								//Se hace el login
								$_SESSION['id'] = $user[0]['id'];
								$_SESSION['nombre'] = $user[0]['nombre'];
								$_SESSION['mail'] = $user[0]['mail'];
								$_SESSION['pass'] = $user[0]['pass'];
								$_SESSION['rfc'] = $user[0]['rfc'];
								$_SESSION['direccion'] = $user[0]['direccion'];
								$_SESSION['telefono'] = $user[0]['telefono'];
								$_SESSION['estatus'] = $user[0]['estatus'];
								$_SESSION['tipo'] = $user[0]['tipo'];
								echo 'Has iniciado Correctamente!';
										
							} 
							else 
								echo 'cuenta inactiva. Porfavor contacte al administrador de cuentas.';
							
						}
						else
							echo 'Usuario o contraseña invalidos';
						
					} 
					else {
						echo 'Ya iniciaste sesion eres: '.$_SESSION['nombre'];
					}
					//include('View/usuarioError.php');
					break;

				case 'logout' :
					
					if (isset($_SESSION['mail'])) {
						
						echo 'Adios '. $_SESSION['nombre'].' vuelve pronto';
						//Limpiamos la sesion
						session_unset();
						//destruyo sesion
						session_destroy();

						//Destruyo cookie
						setcookie(session_name(), '', time() - 3600);

						//Redireccionar a la pagina anterior o al indice con header()
						
					}

					break;
			}
		}
			
	}

}
?>
