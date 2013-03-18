<?php

/**
 * @package mvc
 */

//Creamos el contralador en base a lo requerido y lo mandamos a ejecutar
switch($_REQUEST['modulo'])
{
	case 'usuario': 
		include('Controller/usuarioCtl.php');
		$controlador = new usuarioCtl();
		break;
	case 'producto' : 
		include('Controller/productoCtl.php');
		$controlador = new productoCtl(); 
		break;
	case 'inventario':
		include('Controller/inventarioCtl.php');
		$controlador = new inventarioCtl();
		break;
		
	case 'venta':
		include('Controller/ventaCtl.php');
		$controlador = new ventaCtl();
		break;
	case 'factura':
		include('Controller/facturaCtl.php');
		$controlador = new facturaCtl();
		break;
}

//Ejecutamos el controlador
$controlador -> ejecutar();

?>