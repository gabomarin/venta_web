<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('Model/inventarioBss.php');
define('INVENTARIO', 3);


//La clase controlador

class inventarioCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct() {
		$this -> modelo = new inventarioBss();
	}

	function ejecutar() {
		session_start();
		echo $_SESSION['tipo'];
		if (!isset($_REQUEST['action'])) {
			if (isset($_SESSION['mail']) && $_SESSION['tipo'] == INVENTARIO) {
				//Si no tengo parametros, listo los usuarios

				//Obtengo los datos que se van a listar
				$inventario = $this -> modelo -> listar();

				//Muestro los datos
				include ('View/inventarioListaView.php');
			} else
				echo 'No tienes los permisos necesarios';
		} else
			switch($_REQUEST['action']) {
				case 'insertar' :
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == INVENTARIO) {
						$inventario = $this -> modelo -> insertar($_REQUEST['cantidadProducto'], $_REQUEST['fecha'], $_REQUEST['cantidadReal'], $_REQUEST['cantidadEsperada'], $_REQUEST['descripcion']);
						if (is_object($inventario))
							include ('View/inventarioInsertadoView.php');
						else
							echo 'Error no se pudo insertar';
						//include('View/usuarioError.php');
					} else
						echo 'No tienes los permisos necesarios';
					break;
				case 'listar' :
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == INVENTARIO) {
						$inventario = $this -> modelo -> listar();
						if (is_array($inventario))
							include ('View/inventarioListaView.php');
						else
							echo 'Error no se pudo listar';
					} else
						echo 'No tienes los permisos necesarios';
					break;
				case 'consultarDato' :
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == INVENTARIO) {
						$inventario = $this -> modelo -> consultarDato($_REQUEST['dato'], $_REQUEST['tipo']);
						if (is_object($inventario))
							include ('View/inventarioListaView.php');
						else
							echo 'Error no se pudo listar';

					} else
						echo 'No tienes los permisos necesarios';
					break;
					
				default:
					echo 'Parametro Invalido';
					
					break;
			}

	}

}
?>
