<?php

/**
 * @package mvc
 */

//Se definen las constantes de usuarios
define('INVENTARIO',3);
define('VENTAS', 2);
define('CLIENTE', 1);




 
//Creamos el contralador en base a lo requerido y lo mandamos a ejecutar

if (isset($_GET['modulo'])) {

	switch($_REQUEST['modulo']) {
		case 'usuario' :
			include ('Controller/usuarioCtl.php');
			$controlador = new usuarioCtl();
			break;
		case 'producto' :
			include ('Controller/productoCtl.php');
			$controlador = new productoCtl();
			break;
		case 'inventario' :
			include ('Controller/inventarioCtl.php');
			$controlador = new inventarioCtl();
			break;

		case 'venta' :
			include ('Controller/ventaCtl.php');
			$controlador = new ventaCtl();
			break;
		case 'factura' :
			include ('Controller/facturaCtl.php');
			$controlador = new facturaCtl();
			break;

		case 'estandar' :
			include ('Controller/stdCtl.php');
			$controlador = new stdCtl();
			break;

		default :
			//carga el controlador estandar
			include ("Controller/stdCtl.php");
			$controlador = new stdCtl();
			//header("/index.php");
			break;
	}

	
	
} else {
	include ("Controller/stdCtl.php");
	$controlador = new stdCtl();
	
}
//Ejecutamos el controlador
$controlador -> ejecutar();
?>