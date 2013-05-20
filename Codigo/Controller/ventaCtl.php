<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */
define('INVENTARIO', 3);
define('VENTAS', 2);
define('CLIENTE', 1);

//Este controlador require tener acceso al modelo
include_once ('model/ventaBss.php');
//La clase controlador

class ventaCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct() {
		$this -> modelo = new ventaBss();
	}

	function ejecutar() {
		global $smarty;
		//Si no tengo parametros, listo las ventas
		if (!isset($_REQUEST['action'])) {

			if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
				$venta = $this -> modelo -> listar();
				if (is_array($venta))
					include ('View/listaVenta.php');
				else {
					include ('View/ventaError.php');
				}
			} else
				echo 'No puedes realizar esta accion';
		} else
			switch($_REQUEST['action']) {
				case 'generar' :
					//Cualquiera puede comprar, menos los visitantes
					if (isset($_SESSION['mail'])) {
						$venta = $this -> modelo -> generarVenta($_REQUEST['fecha'], $_REQUEST['total'], $_REQUEST['factura_id'], $_SESSION['id']);
						if (is_array($venta))
							include ('View/listaVenta.php');
						else
							include ('View/ventaError.php');
					} else
						echo 'logueate para poder realizar la compra';
					break;

				case  'cancelar' :
					//Solo encargado de ventas cancela compras
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						$venta = $this -> modelo -> cancelarVenta($_REQUEST['id']);
						if ($venta == true)
							include ('View/listaVenta.php');
						else {
							include ('View/ventaError.php');
						}
					} else {
						echo 'No tienes los privilegios para cancelar la compra';
					}
					break;

				case  'consulta' :
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						if(isset($_REQUEST['tipo']) && isset($_REQUEST['dato'])){
						$venta = $this -> modelo -> consultar($_REQUEST['tipo'], $_REQUEST['dato']);
						if (is_array($venta))
							include ('View/listaVenta.php');
						else {
							include ('View/ventaError.php');
						}
						
						}
						else {
							
							ob_start();
						  require 'templates/consulta_compra.tpl';
						  $panel = ob_get_clean();
						  $smarty->assign('contenido',$panel);
						  $smarty->assign('titulocontenido','');
						}
					} else if (isset($_SESSION['mail']) && ($_SESSION['tipo']==CLIENTE || $_SESSION['tipo']== INVENTARIO)) {
						//if ($_SESSION['id'] == $_REQUEST['id']) {
							$venta = $this -> modelo -> consultar('id', $_SESSION['id']);
							if (is_array($venta)) {

								include ('View/listaVenta.php');
							}
							
						//} else {
						//	include ('View/ventaError.php');
						//	echo 'No tienes permisos para consultar otras ventas';
						//}

					} else
						echo 'No tienes permisos para consultar';

					break;

				case 'listar' :
					if (isset($_SESSION['mail']) && $_SESSION['tipo'] == VENTAS) {
						$venta = $this -> modelo -> listar();
						if (is_array($venta))
							include ('View/listaVenta.php');
						else {
							include ('View/ventaError.php');
						}

					} else
						echo 'No tienes permisos para listar';
					break;

				default :
					echo 'Parametro invalido';
			}

	}

}
?>