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
}

//Ejecutamos el controlador
$controlador -> ejecutar();

?>
