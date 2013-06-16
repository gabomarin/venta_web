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
	
	
	function limpiaCarro()
	{
		
		echo "<script type='text/javascript'>
				simpleCart.empty()
			</script>";
	}

	function ejecutar() {
		global $compra;
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
					
					
					//var_dump($_REQUEST);
					date_default_timezone_set('UTC'); 
					$fecha= date('Y-m-d');
					//echo $fecha;
					
					//die(var_dump( $_COOKIE));
					
					//ob_start();
					//echo "<div class='simpleCart_quantity'></div>";
					//$count=ob_get_clean();
					//die($count);
					if($_REQUEST['itemCount']<=0)
					{
								$smarty->assign('bandera',3);
								$var=$smarty->fetch("venta_completada.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
					}
					//Cualquiera puede comprar, menos los visitantes
					else if (isset($_SESSION['mail'])) {
						$venta = $this -> modelo -> generarVenta($_REQUEST, $_SESSION['id'],$fecha);
						if (is_object($venta))
						{
								$compra= 1;
								$smarty->assign('bandera',1);
								$var=$smarty->fetch("venta_completada.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
								
								
								
								//Ahora envia el email
								
								
								
								require_once('phpmail/class.phpmailer.php');
								require_once('phpmail/class.smtp.php');
								
								$mail = new PHPMailer();
								$mail->IsSMTP();
								$mail->SMTPAuth = true;
								$mail->SMTPSecure = "ssl";
								$mail->Host = "smtp.gmail.com";
								$mail->Port = 465;
		
								$mail->Username = 'virtual.td.26@gmail.com';
								$mail->Password = 'virtualtd';
								
								
								
								ob_start();
								echo "div class='simpleCart_items'></div>";
								$carro= ob_get_clean();
								
								
								$mensaje=  '<style>'.file_get_contents('bootstrap/css/bootstrap.css').'</style>';
								$mensaje.= '<p class="well span7">'.$carro.'</p>';
								
								
								
								
								$para      = $_SESSION['mail'];
								
								$titulo = 'Contacto';
								
								$cabeceras = 'From: '. 'virtual.td.26@gmail.com' . "\r\n" .
									'Reply-To: virtual.td.26@gmail.com' . "\r\n";
								$cabeceras.='MIME-Version: 1.0' . "\r\n";
								$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
								
								$log= fopen('mail_log.txt','a+');	
								if(mail($para, $titulo, $mensaje, $cabeceras))
								{
									fwrite($log,'Email  enviado correctamente el dia '.date('l jS \of F Y ').'a las '.date('h:i:s A').'\n');
								}
								
								else
								{
									fwrite($log,'No se pudo enviar el email');
								}
								fclose($log);
								
							
						}
						else
						{
								$smarty->assign('bandera',0);
								$var=$smarty->fetch("venta_completada.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
						}
					}
					else
					{
						$smarty->assign('bandera',2);
						$var=$smarty->fetch("venta_completada.tpl");
							ob_start();
							echo $var;
							//var_dump($usuario);
							$panel = ob_get_clean();
					  
							//echo $count+"  saasdasd";
							$smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
					}
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
				case  'consultaCompra' :
					if (isset($_SESSION['mail'])) {
						
						$venta = $this -> modelo -> listarCompra($_SESSION['id']);
						/*var_dump($venta);
						die();*/
						
						if (is_array($venta))
						{
								
								$smarty->assign('ventas', $venta);
								$name="";
								for($i=0;$i<7;$i++)
								{
									$name=$name.chr(rand(97,122));
								}
								$name="reporte_ventas";
								
								$smarty->assign('pdf',$name);
								echo $name;
								$var=$smarty->fetch("consulta_compra.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
								
								
							}
						else {
							$smarty->assign('ventas', 'No se encontraron resultados');
								$var=$smarty->fetch("consulta_compra.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
							
						}
					}
					
					break;
				case  'consulta' :
					//var_dump($_SESSION['tipo']);
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
						  require 'templates/consulta_venta.tpl';
						  $panel = ob_get_clean();
						  $smarty->assign('contenido',$panel);
						  $smarty->assign('titulocontenido','');
						}
					} else if (isset($_SESSION['mail']) && ($_SESSION['tipo']==CLIENTE || $_SESSION['tipo']==INVENTARIO )  ) {
						var_dump($_REQUEST);
						//if ($_SESSION['id'] == $_REQUEST['id']) {
						if(isset($_REQUEST['tipo']) && isset($_REQUEST['dato'])){
							$venta = $this -> modelo -> consultar('id', $_SESSION['id']);
							if (is_array($venta)) {

								include ('View/listaVenta.php');
							}
						}
						else {
							
							ob_start();
						  require 'templates/consulta_compra.tpl';
						  $panel = ob_get_clean();
						  $smarty->assign('contenido',$panel);
						  $smarty->assign('titulocontenido','');
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
							{
								$smarty->assign('ventas', $venta);
								$name="";
								for($i=0;$i<7;$i++)
								{
									$name=$name.chr(rand(97,122));
								}
								$name="reporte_ventas";
								
								$smarty->assign('pdf',$name);
								echo $name;
								$var=$smarty->fetch("venta.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
								

								$html =$var;
								$html= str_replace( "Generar Reporte PDF","", $html);
								$html= str_replace( "Generar Reporte EXCEL","", $html); 
								$dompdf = new DOMPDF();
								$dompdf->load_html($html);
								$dompdf->render();
								$output=$dompdf->output();
								
								if(!file_exists('temp/'))
								{
									mkdir('temp',777);
								}
								file_put_contents("temp/$name.pdf", $output);

								/*************** GENERA FACTURA*************************/
								$objPHPExcel = new PHPExcel();


								$objPHPExcel->setActiveSheetIndex(0)
									    ->setCellValue('A1', 'ID')
									    ->setCellValue('B1', 'FECHA')
									    ->setCellValue('C1', 'TOTAL')
									    ->setCellValue('D1', 'CLIENTE');
								for( $i = 0 ; $i< count($venta) ;$i++ ){
									$objPHPExcel->setActiveSheetIndex(0)
									    ->setCellValue('A'.($i+2), $venta[$i]['id'])
									    ->setCellValue('B'.($i+2), $venta[$i]['fecha'])
									    ->setCellValue('C'.($i+2), $venta[$i]['total'])
									    ->setCellValue('D'.($i+2), $venta[$i]['nombre']);
								}
								
								
								
								$objPHPExcel->getActiveSheet()->setTitle('ventas');
								$objPHPExcel->setActiveSheetIndex(0);
								
								$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
								$objWriter->save('temp/reporte.xls');
								
							}
						else {
							$smarty->assign('ventas', 'No se encontraron resultados');
								$var=$smarty->fetch("venta.tpl");
								ob_start();
								echo $var;
								//var_dump($usuario);
								$panel = ob_get_clean();
						  
								//echo $count+"  saasdasd";
								$smarty->assign('titulocontenido','');
								$smarty->assign('contenido',$panel);
								
							
						}

					} else
						echo 'No tienes permisos para listar';
					break;
				
				
				case 'carro':
							//$smarty->assign('bandera',2);
							$var=$smarty->fetch("detalle_carro.tpl");
							ob_start();
							echo $var;
							//var_dump($usuario);
							$panel = ob_get_clean();
					  
							//echo $count+"  saasdasd";
							$smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
					
					break;
				default :
					echo 'Parametro invalido';
			}

	}

}
?>
