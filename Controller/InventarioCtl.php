<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once('Model/inventarioBss.php');

//La clase controlador

class inventarioCtl{

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct(){
		$this -> modelo = new inventarioBss();
	}

	function ejecutar(){
		//Si no tengo parametros, listo los usuarios
		if( !isset($_REQUEST['action']) ){
			//Obtengo los datos que se van a listar
			$inventario = $this->modelo->listar();
			
			//Muestro los datos
			include('View/inventarioListaView.php');
		}
		else switch($_REQUEST['action']){
			case 'insertar':
				$inventario = $this->modelo->insertar($_REQUEST['cantidadProducto'],$_REQUEST['fecha'],$_REQUEST['cantidadReal'],$_REQUEST['cantidadEsperada'],$_REQUEST['descripcion']);
				if ( is_object($inventario) )
					include('View/inventarioInsertadoView.php');
				else
					echo 'Error no se pudo insertar';
					//include('View/usuarioError.php');
				break;
			case 'listar':
					$inventario = $this->modelo->listar();
					if(is_array($inventario))
						include('View/inventarioListaView.php');		
					else
						echo 'Error no se pudo listar';	
					break;
			case 'consultarDato':
						$inventario = $this->modelo->consultarDato($_REQUEST['dato'],$_REQUEST['tipo']);
						if(is_object($inventario))
							include('View/inventarioListaView.php');		
						else
							echo 'Error no se pudo listar';	
						break;

		}				
		
		
	}
}

?>
