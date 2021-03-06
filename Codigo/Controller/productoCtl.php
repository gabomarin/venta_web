<?php

/**
 * @package mvc
 * @subpackage controller
 * @author */

//Este controlador require tener acceso al modelo
include_once('model/productoBss.php');

//La clase controlador

class productoCtl{

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct(){
		$this -> modelo = new productoBss();
	}

	function ejecutar(){
		global $smarty;
		//Si no tengo parametros, listo los productos
		if( !isset($_REQUEST['action']) ){
			//Obtengo los datos que se van a listar
			$producto = $this->modelo->listar();
			
			//Muestro los datos
			include('View/productoListaView.php');
		} else switch($_REQUEST['action']){
			case 'insertar'://solo el encargado de inventario puede insertar
				include('validaciones.php');
				if( isset($_SESSION['mail']) && $_SESSION['tipo'] == 3 ){
					if(count($_REQUEST)>2 && ( isset($_REQUEST['nombre']) && isset($_REQUEST['precio'])&& isset($_REQUEST['existencia']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['estatus']) && isset($_REQUEST['categoria']) && isset($_FILES['imagen'])) ){
					
						if(isNombre($_REQUEST['nombre']) && isEstatus($_REQUEST['estatus']) && isPrecio($_REQUEST['precio']) && isExistencia($_REQUEST['existencia']) && isImagen($_FILES['imagen']['type'])){
							$archivo = $_FILES['imagen']['name'];
							$prefijo = substr(md5(uniqid(rand())),0,2);
							
							$ruta = 'images/'.$prefijo.$archivo;
							copy($_FILES['imagen']['tmp_name'],$ruta);
							$producto = $this->modelo->insertar($_REQUEST['nombre'],$_REQUEST['descripcion'],$_REQUEST['estatus'],$_REQUEST['precio'],$_REQUEST['existencia'],$ruta, $_REQUEST['categoria']);
							if (is_object($producto) )
							{
								$error='El producto ha sido Creado';
								$smarty->assign('titulo','');
								$smarty->assign('error',$error);				  
								$var=$smarty->fetch("registrar_producto.tpl");
								
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
								$smarty->assign('contenido',$panel);
							}
							else
								echo ' Error no se pudo insertar';
								//include('View/usuarioError.php');
						}
						else {
							echo 'Datos no validos. Porfavor revise la sintaxis';
						}
					}
					else {
						ob_start();
						  require 'templates/registrar_producto.tpl';
						  $panel =  ob_get_clean();
						  $smarty->assign('error','');
						  $smarty->assign('titulocontenido','');
						  $smarty->assign('contenido',$panel);
					}
					
				} else {
					echo 'No tienes permisos para realizar esta accion';
				} break;
			case 'listar'://cualquiera puede listar los productos
					$producto = $this->modelo->listar();
					if(is_array($producto))
						{
							$smarty->assign('productos',$producto);
							$smarty->assign('lista','Todos los productos');
							$var=$smarty->fetch("lista_productos.tpl");
							ob_start();

							echo $var;
							$panel = ob_get_clean();
							
							 //echo $count+"  saasdasd";
							
							$smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
									 
						}
					else
						echo 'Error no se pudo listar';
					break;
				
				case 'listart':
					$producto = $this->modelo->listar();
					if(is_array($producto))
						{
							$smarty->assign('productos', $producto);
							
							$var=$smarty->fetch("vista_Producto.tpl");
							ob_start();
							echo $var;
							//var_dump($usuario);
							$panel = ob_get_clean();
						  
						   //echo $count+"  saasdasd";
							$smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
							
						}
					else
						{
							$smarty->assign('productos', "No se han podido encontrar usuarios'");

							$var=$smarty->fetch("vista_Producto.tpl");
							ob_start();
							echo $var;
							$panel = ob_get_clean();
						  
						   //echo $count+"  saasdasd";
						   $smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
						}
					
					break;
				
				
				
			case 'consultarDato'://cualquiera puede consultar un producto
						include('validaciones.php');
						if(isProductoAD($_REQUEST['atributo'],$_REQUEST['dato'])){
							$producto =
							$this->modelo->consultarDato($_REQUEST['dato'],$_REQUEST['atributo']);
							if(is_object($producto)){
								//include('View/productoListaView.php');
								//$smarty->assign('titulocontenido',$producto->nombre);
								//ob_start();
								//{
								//	echo "<p>$ $producto->precio</p>";
								//	echo "<p>$producto->descripcion</p>";
								//	echo "<br><button class='btn btn-primary' id=agregar onClick=a�adir()>Agregar</button>";
								//}
								//$panel= ob_get_clean();
								//$smarty->assign('contenido',$panel);
								$smarty->assign('producto_nombre', $producto->nombre);
								$smarty->assign('producto_imagen', $producto->imagen);
								$smarty->assign('producto_descripcion', $producto->descripcion);
								$smarty->assign('producto_precio', $producto->precio);
								$smarty->assign('producto_id',$producto->id);
								
								//var_dump($producto);
								
								$var=$smarty->fetch("mostrar_producto.tpl");
								ob_start();
								echo $var;
								////var_dump($usuario);
								$panel = ob_get_clean();
								// 
								////echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
								
							}
							
							else
								$smarty->assign('contenido','Error al procesar la solicitud');
						} else {
							echo 'Datos no validos. Porfavor revise la
							sintaxis';
						}
				break;
			case 'modificarDato'://solo el encargado de ventas e inventario pueden realizar esta accion
						if( isset($_SESSION['mail']) && $_SESSION['tipo'] != 1){
							include('validaciones.php');
							if(isset($_REQUEST['nombre']) &&
							isset($_REQUEST['precio']) &&
							isset($_REQUEST['existencia']) ){
							if(isId($_REQUEST['id']) &&
							isProductoAD($_REQUEST['atributo'],$_REQUEST['dato'])){
								$producto =
								$this->modelo->modificarDato($_REQUEST['id'],$_REQUEST['dato'],$_REQUEST['atributo']);
								if($producto == TRUE)
									echo 'El campo fue modificado exitosamente';
								else {
									echo 'El campo no pudo ser modificado';
								}
							} else {
								echo 'Datos no validos. Porfavor revise la
								sintaxis';
							} } else {
								ob_start();
								require 'templates/modificar_producto.tpl';
								$panel =ob_get_clean();
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
							}
						} else {
							echo 'No tienes permisos para realizar esta accion';
						}
			break;
		
		
			case 'modificar':
				include('validaciones.php');
				if(isset($_REQUEST['precio']) && isset($_REQUEST['existencia']) && isset($_REQUEST['categoria']) && isset($_REQUEST['descripcion']) ){

					$producto = $this->modelo->modificaProducto($_REQUEST['id'],$_REQUEST['precio'],$_REQUEST['existencia'],$_REQUEST['categoria'], $_REQUEST['descripcion']);
					//var_dump($usuario);
					if($producto == TRUE){

						$smarty->assign('titulo','Modificar producto');
						$smarty->assign('error','Se ha modificado el producto');
						$smarty->assign('id', $_REQUEST['id']);
						$smarty->assign('nombre', $_REQUEST['nombre']);
						//$smarty->assign('imagen', $_REQUEST['imagen']);
						$smarty->assign('descripcion', $_REQUEST['descripcion']);
						$smarty->assign('precio', $_REQUEST['precio']);
						$smarty->assign('estatus', $_REQUEST['estatus']);
						$smarty->assign('existencia', $_REQUEST['existencia']);

						$var=$smarty->fetch("modificar_producto.tpl");
						
						ob_start();
						echo $var;
						//var_dump($usuario);
						$panel = ob_get_clean();
						$smarty->assign('contenido',$panel);
					}
					
					else {
						
						
						$smarty->assign('titulo','ERROR');
						$smarty->assign('error','');
						$smarty->assign('id', $_REQUEST['id']);
						$smarty->assign('nombre', $_REQUEST['nombre']);
						//$smarty->assign('imagen', $_REQUEST['imagen']);
						$smarty->assign('descripcion', $_REQUEST['descripcion']);
						$smarty->assign('precio', $_REQUEST['precio']);
						$smarty->assign('estatus', $_REQUEST['estatus']);
						$smarty->assign('existencia', $_REQUEST['existencia']);

						$var=$smarty->fetch("modificar_producto.tpl");
						
						ob_start();
						echo $var;
						//var_dump($usuario);
						$panel = ob_get_clean();
						$smarty->assign('contenido',$panel);
					}
				}
				else {
						
						
						$smarty->assign('titulo','Modificar Producto');
						$smarty->assign('error','');
						$smarty->assign('id', $_REQUEST['id']);
						$smarty->assign('nombre', $_REQUEST['nombre']);
						//$smarty->assign('imagen', $_REQUEST['imagen']);
						$smarty->assign('descripcion', $_REQUEST['descripcion']);
						$smarty->assign('precio', $_REQUEST['precio']);
						$smarty->assign('estatus', $_REQUEST['estatus']);
						$smarty->assign('existencia', $_REQUEST['existencia']);

						$var=$smarty->fetch("modificar_producto.tpl");
						
						ob_start();
						echo $var;
						//var_dump($usuario);
						$panel = ob_get_clean();
						$smarty->assign('contenido',$panel);
					}
			break;
			
			case 'checaProducto':
				$smarty->assign('titulo',"Modificar producto");
				$smarty->assign('id', $_REQUEST['id']);
				$smarty->assign('nombre', $_REQUEST['nombre']);
				$smarty->assign('imagen', $_REQUEST['imagen']);
				$smarty->assign('descripcion', $_REQUEST['descripcion']);
				$smarty->assign('precio', $_REQUEST['precio']);
				$smarty->assign('estatus', $_REQUEST['estatus']);
				$smarty->assign('existencia', $_REQUEST['existencia']);

				$smarty->assign('error', '');
				$var=$smarty->fetch("modificar_producto.tpl");
				ob_start();

				echo $var;
				$panel = ob_get_clean();
			  
			   //echo $count+"  saasdasd";
			  
				$smarty->assign('titulocontenido','');
				$smarty->assign('contenido',$panel);
				break;
		}
		
		
	}
}

?>
