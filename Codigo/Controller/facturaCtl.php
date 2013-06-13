<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('model/facturaBss.php');
include_once ('factura/factura.php');
define('VENTAS', 2);
define('CLIENTE', 1);
define('INVENTARIO',3);


//La clase controlador

class facturaCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct() {
		$this -> modelo = new facturaBss();
		$this -> modeloFactura = new facturaPdfBss();
	}

	function ejecutar() {
		
		if (!isset($_REQUEST['action'])) {
			if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS){
			//Obtengo los datos que se van a listar
			$factura = $this -> modelo -> listar();

			//Muestro los datos
			include ('View/listaFactura.php');
			}
			else echo 'No tienes los permisos para realizar esta accion';
		} else
			switch($_REQUEST['action']) {
				case 'generar' :
					//solo encargado de ventas crea factura
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						$factura = $this -> modelo -> crearFactura($_REQUEST['fecha'], $_REQUEST['cantidad'], $_REQUEST['precio'], $_REQUEST['estatus']);
						if (is_array($factura))
							include ('View/listaFactura.php');
						else
							include ('View/facturaError.php');
					}
					
					else {
						echo 'No puedes realizar esta accion';
					}
					break;

				case 'modificar' :
					// solo encargado de ventas modifica facturas
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						$factura = $this -> modelo -> modificarEstatus($_REQUEST['id'], $_REQUEST['estatus']);
						if (is_array($factura))
							include ('View/listaFactura.php');
						else
							include ('View/facturaError.php');
					}
					else echo 'No puedes realizar esta accion';
					break;

				case 'listar' :
					//solo encargado de ventas revisa todas las facturas
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS){
					$factura = $this -> modelo -> listar();
					if (is_array($factura))
						include ('View/listaFactura.php');
					else
						include ('View/facturaError.php');
					}
					else {
						echo 'No tienes permisos para realizar esta accion';
					}
					break;

				case 'consulta' :

					//El encargado de ventas elige que consultar
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						$factura = $this -> modelo -> consultar($_REQUEST['tipo'], $_REQUEST['dato'],false );
						if (is_array($factura))
							include ('View/listaFactura.php');
						else
							include ('View/facturaError.php');
					} 
										
					// si es cliente  o inventario solo podra listar sus propias facturas
					else if( isset($_SESSION['mail']) && $_SESSION['tipo'] == CLIENTE  || isset($_SESSION['mail']) && $_SESSION['tipo'] == INVENTARIO){
						unset($_GET); //se limpian las variables get por que no se utilizan
						$factura = $this -> modelo -> consultar('id', $_SESSION['id'],true);
						if (is_array($factura))
							include ('View/listaFactura.php');
						else
							include ('View/facturaError.php');
					}
					else 
						echo 'No tienes permisos para realizar esta accion';
						
						break;
				case 'pdf':
					if(isset( $_REQUEST['id'] )){	
						$facuraPdf = $this -> modeloFactura -> crearFactura($_REQUEST['id']);
					}
					break;
			}

	}

}
?>