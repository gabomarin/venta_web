<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('Model/facturaBss.php');

//La clase controlador

class facturaCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct() {
		$this -> modelo = new facturaBss();
	}

	function ejecutar() {

		if (!isset($_REQUEST['action'])) {
			//Obtengo los datos que se van a listar
			$factura = $this -> modelo -> listar();

			//Muestro los datos
			include ('View/listaFactura.php');
		} else
			switch($_REQUEST['action']) {
				case 'generar' :
					$factura = $this -> modelo -> crearFactura($_REQUEST['fecha'], $_REQUEST['cantidad'], $_REQUEST['precio'],
					 $_REQUEST['estatus'], $_REQUEST['idVenta']);
					if (is_array($factura))
						include ('View/listaFactura.php');
					else
						include ('View/facturaError.php');
					break;

				case 'modificar' :
					$factura = $this -> modelo -> modificarEstatus($_REQUEST['folio'], $_REQUEST['estatus']);
					if (is_array($factura))
						include ('View/listaFactura.php');
					else
						include ('View/facturaError.php');
					break;

				case 'listar' :
					$factura = $this -> modelo -> listar();
					if (is_array($factura))
						include ('View/listaFactura.php');
					else
						include ('View/facturaError.php');
					break;

				case 'consulta' :
					$factura = $this -> modelo -> consultar($_REQUEST['tipo'],$_REQUEST['dato']);
					if (is_array($factura))
						include ('View/listaFactura.php');
					else
						include ('View/facturaError.php');
					break;
			}

	}

}
?>