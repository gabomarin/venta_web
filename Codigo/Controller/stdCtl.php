<?php

/**
 * @package mvc
 * @subpackage controller
 * @author
 */

//Este controlador require tener acceso al modelo
include_once ('model/loginBss.php');

//La clase controlador

class stdCtl {
	

	public $modelo;

	//Cuando se crea el controlador crea el modelo de usuario
	function __construct() {
		$this -> modelo = new loginBss();
	}

	function ejecutar() {
		global $smarty;		
		//opcion por default
		if (!isset($_REQUEST['action'])) {
			if (!isset($_SESSION['mail'])) {
						if( isset($_REQUEST['mail']) && isset($_REQUEST['pass']) ){
							$user = $this -> modelo -> login($_REQUEST['mail'], $_REQUEST['pass']);
							if ( is_array( $user ) ) {
								if( $user[0]['estatus'] == 1  ){
									//Se hace el login
									$_SESSION['id'] = $user[0]['id'];
									$_SESSION['nombre'] = $user[0]['nombre'];
									$_SESSION['mail'] = $user[0]['mail'];
									$_SESSION['pass'] = $user[0]['pass'];
									$_SESSION['rfc'] = $user[0]['rfc'];
									$_SESSION['direccion'] = $user[0]['direccion'];
									$_SESSION['telefono'] = $user[0]['telefono'];
									$_SESSION['estatus'] = $user[0]['estatus'];
									$_SESSION['tipo'] = $user[0]['tipo'];
									$_SESSION['carro']='0';
									//echo 'Has iniciado Correctamente!';
									header('Location: index.php');
											
											
								} 
								else 
									echo 'cuenta inactiva. Porfavor contacte al administrador de cuentas.';
								
							}
							else
								echo 'Usuario o contraseña invalidos';
						}
						else {
							$smarty->assign('titulo',"Iniciar sesion");
							ob_start();
						  require 'templates/portada.tpl';
						  $panel = ob_get_clean();
						  $smarty->assign('contenido',$panel);
						}
						
					} 
					else {
						//echo 'Ya iniciaste sesion eres: '.$_SESSION['nombre'];
					}
		} 
		else{
			switch($_REQUEST['action']) {
				case 'login' :
					if (!isset($_SESSION['mail'])) {
						if( isset($_REQUEST['mail']) && isset($_REQUEST['pass']) ){
							$user = $this -> modelo -> login($_REQUEST['mail'], $_REQUEST['pass']);
							if ( is_array( $user ) ) {
								if( $user[0]['estatus'] == 1  ){
									//Se hace el login
									$_SESSION['id'] = $user[0]['id'];
									$_SESSION['nombre'] = $user[0]['nombre'];
									$_SESSION['mail'] = $user[0]['mail'];
									$_SESSION['pass'] = $user[0]['pass'];
									$_SESSION['rfc'] = $user[0]['rfc'];
									$_SESSION['direccion'] = $user[0]['direccion'];
									$_SESSION['telefono'] = $user[0]['telefono'];
									$_SESSION['estatus'] = $user[0]['estatus'];
									$_SESSION['tipo'] = $user[0]['tipo'];
									$_SESSION['carro']='0';
									//echo 'Has iniciado Correctamente!';
									header('Location: index.php');
											
											
								} 
								else 
									echo 'cuenta inactiva. Porfavor contacte al administrador de cuentas.';
								
							}
							else
								{
									$error='Error: Usuario o contraseña invalidos';
									$smarty->assign('titulo',"Iniciar Sesion");
									$smarty->assign('error',$error);
									//ob_start();
								  //require 'templates/login.tpl';
								  //$panel = ob_get_clean();
								  
									$var=$smarty->fetch("login.tpl");
									
									ob_start();
									echo $var;
									//var_dump($usuario);
									$panel = ob_get_clean();
									$smarty->assign('contenido',$panel);
								}
						}
						else {
							$smarty->assign('titulo',"Iniciar Sesion");
							$smarty->assign('error','');
							//ob_start();
						  //require 'templates/login.tpl';
						  //$panel = ob_get_clean();
						  
							$var=$smarty->fetch("login.tpl");
							
							ob_start();
							echo $var;
							//var_dump($usuario);
							$panel = ob_get_clean();
							$smarty->assign('contenido',$panel);
						}
						
					} 
					else {
						//echo 'Ya iniciaste sesion eres: '.$_SESSION['nombre'];
					}
	
					break;

				case 'logout' :
					
					if (isset($_SESSION['mail'])) {
						
						//echo 'Adios '.$_SESSION['nombre'].' vuelve pronto';
						//Limpiamos la sesion
						session_unset();
						//destruyo sesion
						session_destroy();

						//Destruyo cookie
						@setcookie(session_name(), '', time() - 3600);
							
						//Redireccionar a la pagina anterior o al indice con header()
						header('Location: index.php');
						
					}
					else
						echo 'No has iniciado sesion'; 

					break;
				
				
				case 'contacto':
					if(isset($_REQUEST['nombre']) && isset($_REQUEST['mail']) && isset($_REQUEST['descripcion']))
					{
						
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
						
						
						
						$para      = 'virtual.td.26@gmail.com';
						$titulo = 'Contacto';
						$mensaje=  '<style>'.file_get_contents('bootstrap/css/bootstrap.css').'</style>';
						$mensaje.= '<p class="well span7">'.$_REQUEST['descripcion'].'</p>';
						$cabeceras = 'From: '.$_REQUEST['mail'] . "\r\n" .
							'Reply-To: virtual.td.26@gmail.com' . "\r\n";
						$cabeceras.='MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
						
						
						$log= fopen('mail_log.txt','a+');	
						// se manda el email al administrador
						if(mail($para, $titulo, $mensaje, $cabeceras)) {  // Si fue envieado entonces tambien se manda un correo de respuesta temporal al usuario
							
							$smarty->assign('registro', 'Contacto');
							
							$mensaje= 'Tu correo ha sido enviado correctamente.';
							
							
							
							$smarty->assign('mensaje', $mensaje);
									
							$var=$smarty->fetch("usuario_registrado.tpl");
							ob_start();
							echo $var;
							//var_dump($usuario);
							$panel = ob_get_clean();
						  
						   //echo $count+"  saasdasd";
							$smarty->assign('titulocontenido','');
							$smarty->assign('contenido',$panel);
							
							
							$mail->From= 'virtual.td.26@gmail.com';
							$mail->FromName= 'Le Administradore';
							$mail->Subject = 'Gracias por Contactarnos';
							$mail->AltBody = 'No se puede mostrar el correo, por favor actualiza tu navegador';
							$msg=  '<style>'.file_get_contents('bootstrap/css/bootstrap.css').'</style>';
							$msg.= '<div class="well span7 text-center">';
							$msg.= '<a class="text-center" href="http://alanturing.cucei.udg.mx/cc409/virtualtd/index.php"><img class="img-rounded" src="images/logo_mail.jpg"  /></a>';
							$msg.= '<p class="hero-unit lead">Gracias por utilizar nuestro formulario de contacto, revisaremos tu solicitud y te responderemos lo mas rapido posible
									<br>
									<blockquote><small><strong>Atentamente "El Admin"</strong></small></blockquote>
									</p>';
							$msg.= '</div>';
							
							$mail->MsgHTML($msg);
					
							$mail->AddAddress($_REQUEST['mail'], $_REQUEST['nombre']);
							
							$mail->Send();
							
							//echo 'Email enviado correctamente el dia '.date('l jS \of F Y ').'a las '.date('h:i:s A').'\n';
							fwrite($log,'Email  enviado correctamente el dia '.date('l jS \of F Y ').'a las '.date('h:i:s A').'\n');
						
						} else {
							fwrite($log,'No se pudo enviar el email');
						}
							fclose($log);
					}
					else{
							$smarty->assign('titulo',"Contacto");
							ob_start();
							require 'templates/contacto.tpl';
							$panel = ob_get_clean();
							$smarty->assign('contenido',$panel);
							$smarty->assign('titulocontenido','');
					}
					
					break;
			}
		}
			
	}

}
?>
