<?php

/**
 * @package mvc
 */

 
require('include.php');
if( !isset($_SESSION) ){
	session_start();
}

class index {
             public function display()
             {
			     
				 global $smarty;
				
						  //echo $_SESSION['mail'];
				 if(isset($_SESSION['mail']))
				 {
						  require('model/dbdata.inc');
						  $temp= "<li><a class='superior' href= 'index.php?modulo=usuario&action=consultarDato'>Perfil ($_SESSION[nombre])</a></li>  ";
						  if($_SESSION['tipo']==3)
						  {
						        $temp= $temp."<li><a class='superior' href='index.php?modulo=producto&action=insertar'>Agregar Producto</a></li>";
								$temp= $temp."<li><a class='superior' href='index.php?modulo=producto&action=modificarDato'>Modificar Producto</a></li>";
								$temp= $temp."<li><a class='superior' href='index.php?modulo=inventario&action=insertar'>Agregar Inventario</a></li>";
								$temp= $temp."<li><a class='superior' href='index.php?modulo=inventario&action=consultarDato'>Consultar Inventario</a></li>";
						  }
						  
						  if($_SESSION['tipo']==2)
						  {
						        $temp= $temp."<li><a class='superior' href='index.php?modulo=usuario&action=consultarDato'>Consultar Usuario</a></li>";
								$temp= $temp."<li><a class='superior' href='index.php?modulo=venta&action=consulta'>Consultar Venta</a></li>";
						  }
						  
						  $temp.="<li><a class='superior' href='index.php?modulo=estandar&action=logout'>Salir</a></li>";
						  
						  $smarty->assign('user',$temp);
						 
						  
						  $smarty->assign('numero',$_SESSION['carro']);
						  
						  
						  $conexion  = new mysqli($hostdb, $userdb, $passdb, $db);
						  if(!$conexion)
						   die('No se ha podido realizar la conexion a la bd');
						   $query = "SELECT * FROM `producto` LIMIT 0,5";
						    $resultado = $conexion -> query($query);	
						  $smarty->assign('titulocontenido','Ultimos Productos');
						  //$smarty->assign('contenidos', $resultado);
						  
						  
						ob_start();
						while($fila = $resultado->fetch_assoc()){
						  
							echo "<div class='span4'>
					
							<a href=index.php?modulo=producto&action=consultarDato&dato=$fila[id]&atributo=id class='name'><img src=$fila[imagen] alt='' width='124' height='097' /></a>
							<br><span>$ $fila[precio]</span>
							<a href='index.php?modulo=producto&action=consultarDato&dato=$fila[id]&atributo=id'>Ver</a></div>";
						}
				   
			       $resultado=ob_get_clean();
				   
				   $smarty->assign('contenido',$resultado);
			 
			 
						 
						  
						  
				 }
				 
				 else{
						  
						  $smarty->assign('user','<li><a class="superior" href="index.php?modulo=estandar&action=login">Iniciar sesion</a></li><li>
						  <a class="superior" href="index.php?modulo=usuario&action=insertar">Registrate</a></li>');
						  
						  //lee un archivo y lo guardara en una variable
						 
						  $smarty->assign('numero','0');
						  
						  ob_start();
						  require 'templates/login.tpl';
						  //require 'templates/registrar_usuario.tpl';
						  
						  $panel = ob_get_clean();
						  $smarty->assign('contenido', $panel);
						  $smarty->assign('contenidos','');
						  $smarty->assign('titulocontenido', '');
				 }
				 
			 
				 
				 
						  
				                    
            }
			
			
			function getContenido()
			{
			 global $smarty;
			     require('model/dbdata.inc');
				 include_once('model/dbClass.php');
			 //Obtenemos las categorias
				//   $conexion  = new mysqli($hostdb, $userdb, $passdb, $db);
				//   
				//   if(!$conexion)
				//		var_dump($conexion);
				$conexion  = new DB($hostdb, $userdb, $passdb, $db);
						  
			       $query = "SELECT * FROM categoria ORDER BY nombre";
				   
				   
				   $resultado = $conexion -> ejecutarConsulta($query);

			       $smarty->assign('categorias', $resultado);
				   
				  
				   $query = "SELECT * FROM `producto` LIMIT 0,5";
				   $resultado = $conexion -> ejecutarConsulta($query);
			       $smarty->assign('ultimos', $resultado);
				   
				   
				   $conexion->cerrar();
				   
			}
			
			function ultimosProductos()
			{
			  global $smarty;
			 
				  $conexion  = new DB($hostdb, $userdb, $passdb, $db);
				   if(!$conexion -> conecta())
						  die('No se ha podido realizar la conexion a la bd');
			       $query = "SELECT * FROM `categoria` LIMIT 0,5";
				   $resultado = $conexion -> ejecutarConsulta($query);
			       $conexion->cerrar();
				   $smarty->assign('ultimos', $resultado);
				   
				   
				 
			}
}


//Creamos el contralador en base a lo requerido y lo mandamos a ejecutar

if (isset($_GET['modulo'])) {

	switch($_REQUEST['modulo']) {
		case 'usuario' :
			include ('controller/usuarioCtl.php');
			$controlador = new usuarioCtl();
			break;
		case 'producto' :
			include ('controller/productoCtl.php');
			$controlador = new productoCtl();
			break;
		case 'inventario' :
			include ('controller/inventarioCtl.php');
			$controlador = new inventarioCtl();
			break;

		case 'venta' :
			include ('controller/ventaCtl.php');
			$controlador = new ventaCtl();
			break;
		case 'factura' :
			include ('controller/facturaCtl.php');
			$controlador = new facturaCtl();
			break;

       case 'categoria' :
			include ('controller/categoriaCtl.php');
			$controlador = new categoriaCtl();
			break;

		case 'estandar' :
			include ('controller/stdCtl.php');
			$controlador = new stdCtl();
			break;


		default :
			//carga el controlador estandar
			include ("controller/stdCtl.php");
			$controlador = new stdCtl();
			header("/index.php");	
			$call = new index();
			$call->display();
			
			break;
	}


	
	
} 
else {
	include ("controller/stdCtl.php");
	$controlador = new stdCtl();
	
			 
			 
			 
	
}
$call = new index();
$call->display();
$call->getContenido();
$controlador -> ejecutar();


$smarty->display('base_principal2.tpl');

?>
