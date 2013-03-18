<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('Model/ventaBss.php');

//La clase controlador

class ventaCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct() {
		$this -> modelo = new ventaBss();
	}

	function ejecutar() {
		//Si no tengo parametros, listo los usuarios
		if (!isset($_REQUEST['action'])) {
			//Obtengo los datos que se van a listar
			$usuarios = $this -> modelo -> listar();

			//Muestro los datos
			include ('View/listaVenta.php');
		} else
			switch($_REQUEST['action']) {
				case 'generar' :
					$venta = $this -> modelo -> generarVenta($_REQUEST['fecha'], $_REQUEST['total']);
					if (is_array($venta))
						include ('View/listaVenta.php');
					else
						include ('View/ventaError.php');
					break;

				case  'cancelar' :
					$venta = $this -> modelo -> cancelarVenta($_REQUEST['id']);
					if ($venta == true)
						include ('View/ventaInsertada.php');
					else {
						include ('View/ventaError.php');
					}

				case  'consulta' :
					$venta = $this -> modelo -> consultar($_REQUEST['tipo'], $_REQUEST['dato']);
					if (is_array($venta))
						include ('View/listaVenta.php');
					else {
						include ('View/ventaError.php');
					}
					
				case 'listar':
					$venta = $this -> modelo -> listar();
					if (is_array($venta))
						include ('View/listaVenta.php');
					else {
						include ('View/ventaError.php');
					}
					
			}

	}

}
?>