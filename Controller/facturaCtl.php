<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once('Model/facturaBss.php');

//La clase controlador

class ventaCtl{

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct(){
		$this -> modelo = new factura();
	}

	function ejecutar(){
		
		if( !isset($_REQUEST['action']) ){
			//Obtengo los datos que se van a listar
			$factura = $this->modelo->listar();

			//Muestro los datos
			include('View/listaFactura.php');
		}
		else switch($_REQUEST['action']){
			case 'generar':
				$venta = $this->modelo->generar($_REQUEST['fecha'],$_REQUEST['cantidad'],$_REQUEST['precio'],$_REQUEST['estatus']);
				if ( is_array($venta) )
					include('View/listaFactura.php');
				else
					include('View/facturaError.php');
				break;
		}				


	}
}

?>