<?php

/**
 * @package mvc
 * @subpackage model
 */

class loginBss{
	
	/**
	 * @param string $nombre
	 * @param string $mail
	 * @param string $pass encriptado md5
	 * @param int $privilegio indica el perfil de permisos
	 * @return mixed usuarioClass object y en caso de falla un FALSE
	 */
	function login($mail,$pass){
		//Cargar clase usuario
		require('loginClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		//echo $mail."     ".$pass;
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		 
		if(!$conexion -> conecta())
			die('No se ha podido realizar la conexion a la bd');


		//Limpiar las variables recibidas
			$mail		=  $conexion->limpiarVariable($mail);
			$pass		=  $conexion->limpiarVariable($pass);
			

		//Crear el query
		$query = "SELECT * FROM usuario 
				  WHERE
				  	mail= '$mail'
				  	AND
				  	pass= '$pass'"; 
				  
				  

		//Ejecutar el query
		//echo $query;
		$resultado = $conexion -> ejecutarConsulta($query);
		$conexion->cerrar();
		if($resultado == FALSE){
			//Cerrar la conexion
			return FALSE;
		}
		
		//var_dump($resultado);
		return $resultado;
		
		

		
	}

}

?>