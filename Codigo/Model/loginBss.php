<?php

/**
 * @package mvc
 * @subpackage model
 */
 
require('dbClass.php');
	
class loginBss extends DB{
		
	/**
	 * @param string $nombre
	 * @param string $mail
	 * @param string $pass encriptado md5
	 * @param int $privilegio indica el perfil de permisos
	 * @return mixed usuarioClass object y en caso de falla un FALSE
	 */
	function login($mail,$pass){
		//Cargar clase usuario
		require_once('loginClass.php');

		//echo $mail."     ".$pass;
		 
		//Limpiar las variables recibidas
			$mail		=  parent::limpiarVariable($mail);
			$pass		=  parent::limpiarVariable($pass);
			

		//Crear el query
		$query = "SELECT * FROM usuario 
				  WHERE
				  	mail= '$mail'
				  	AND
				  	pass= '$pass'"; 
				  
		//Ejecutar el query
		//echo $query;
		$resultado = parent::ejecutarConsulta($query);
		//$conexion->cerrar();
		if($resultado == FALSE){
			//Cerrar la conexion
			return FALSE;
		}
		
		//var_dump($resultado);
		return $resultado;
		
		

		
	}

}

?>