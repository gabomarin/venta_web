<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('model/categoriaBss.php');

//La clase controlador

class categoriaCtl {

	public $modelo;

	//Cuando se crea el controlador crea el modelo de venta
	function __construct() {
		$this -> modelo = new categoriaBss();
	}

	function ejecutar() {
		global $smarty;
		if (!isset($_REQUEST['action'])) {

			//Obtengo los datos que se van a listar
			$categoria = $this -> modelo -> listar();
			//Muestro los datos
			include ('View/listaCategoria.php');

		} else
			switch($_REQUEST['action']) {
				case 'insertar' :
					include('validaciones.php');
					if( isset($_REQUEST['nombre']) ){
						if( isNombre( $_REQUEST['nombre'] ) ){
							$categoria = $this -> modelo -> insertar($_REQUEST['nombre']);
							if (is_object($categoria))
								include ('View/listaCategoria.php');
							else
								echo 'error al desplegar';
								//include ('View/categoriaError.php');
						}
						else{
							echo 'Datos no validos. Porfavor revise la sintaxis';
						}
					}
					
						

					break;

				case 'modificar' :
					// solo encargado de ventas modifica facturas
						include('validaciones.php');
						if( isId($_REQUEST['id']) && isNombre($_REQUEST['nombre']) ){
							$categoria = $this -> modelo -> modificarDato($_REQUEST['id'], $_REQUEST['nombre']);
							if($categoria == TRUE)
								echo 'El campo fue modificado exitosamente';
							else {
								echo 'El campo no pudo ser modificado';
							}
						}
						

					break;

				case 'listar' :

					$categoria = $this -> modelo -> listar();
					if (is_array($categoria))
						include ('View/listaCategoria.php');
					else
						echo 'no se pudo desplegar';
						//include ('View/facturaError.php');

					break;

				case 'consulta' :
						include('validaciones.php');
						if( isset($_REQUEST['id'])){
							
							$categoria = $this -> modelo -> consultarDato($_REQUEST['id'] );
							if($categoria==FALSE)
							{
								$smarty->assign('titulocontenido',"");
								$smarty->assign('contenido',"<div class='well span7'><legend><h1>ERROR</h1></legend><p>No se pudo mostrar</p></div>");
							}
							else{
								$smarty->assign('titulocontenido',"");
									//$smarty->assign('contenidos', $categoria);
						  
						  			
									ob_start();
									echo "<div class='well span7'><legend><h1>".$categoria[0]['cnombre']."</h1></legend>";
									 for($i=0;$i<count($categoria);++$i){
										$fila = $categoria[$i];	
									  echo "<div class='span3'>
									  
									  <a href=index.php?modulo=producto&action=consultarDato&dato=$fila[id]&atributo=id class='name'><img src=$fila[imagen] alt='' width='124' height='097' /></a>
									  <br><span>$ $fila[precio]</span>
									  <a href='index.php?modulo=producto&action=consultarDato&dato=$fila[id]&atributo=id'>Ver</a></div>";
									  
									 }
									 echo "</div>"; 
									 
									 $categoria=ob_get_clean();
									 
									 $smarty->assign('contenido',$categoria);
							}
								
							//		include ('View/listaCategoria.php');
							//	else
							//		echo 'no se pudo desplegar';
							//		//include ('View/facturaError.php');
							
							
						}
						
						
						break;
			}

	}

}
?>