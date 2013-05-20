<?php

/**
 * @package mvc
 * @subpackage model
 */

class usuarioBss{
	
	/**
	 * @param string $nombre
	 * @param string $mail
	 * @param string $pass encriptado md5
	 * @param int $privilegio indica el perfil de permisos
	 * @return mixed usuarioClass object y en caso de falla un FALSE
	 */
	function insertar($nombre,$mail,$pass,$direccion,$rfc,$telefono,$estatus,$tipo){
		//Cargar clase usuario
		require('usuarioClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require_once('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		 
		if(!$conexion -> conecta())
			die('No se ha podido realizar la conexion a la bd');


		//Limpiar las variables recibidas
			$nombre		=  $conexion->limpiarVariable($nombre);
			$mail		=  $conexion->limpiarVariable($mail);
			$pass		=  $conexion->limpiarVariable($pass);
			$direccion	=  $conexion->limpiarVariable($direccion);
			$rfc		=  $conexion->limpiarVariable($rfc);
			$elefono	=  $conexion->limpiarVariable($telefono);
			$estatus	=  $conexion->limpiarVariable($estatus);
			$tipo		=  $conexion->limpiarVariable($tipo);

		//Crear el query
		$query = "INSERT INTO 
				   usuario(nombre,mail,pass,direccion,rfc,telefono,estatus,tipo)
				  VALUES
				  ('$nombre',
				   '$mail',
				   '$pass',
				   '$direccion',
				   '$rfc',
				   '$telefono',
				    $estatus,
				    $tipo)";

		//Ejecutar el query
		$resultado = $conexion -> ejecutarConsulta($query);

		if($resultado == FALSE){
			echo 'FALLO la consulta';
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			$id = $resultado;
			//Cerrar la conexion
			$conexion -> cerrar();

			//Arreglo del usuario
			$user = new usuarioClass($id,$nombre,$mail,$pass,$direccion,$rfc,$telefono,$estatus,$tipo);
	
			return $user;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar(){
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		if(!$conexion-> conecta())
			die('LIST. No se ha podido realizar la conexion a la bd');

		//Crear el query
		$query = 'SELECT
					*
				  FROM
					usuario';

		//Ejecutar el query
		$resultado = $conexion -> ejecutarConsulta($query);

		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			$conexion -> cerrar();

			return $resultado;			
		}
	}

	/**
	 * @param int $id del usuario
	 * @return object usuarioClass, FALSE en caso de falla
	 */
	function consultarDato($dato,$atributo){
		//Cargar clase usuario
		require('usuarioClass.php');
		
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		if(!$conexion->conecta())
			die('No se ha podido realizar la conexion a la bd');

		//Limpio las variables
		$dato = $conexion->limpiarVariable($dato);
		if( $atributo != 'id' && $atributo != 'estatus' && $atributo != '$atributo' )
			$temp = '"'.$dato.'"' ;
		else
			$temp = $dato; 
		//echo $dato.'     ';
		//Crear el query
	
		$query = "SELECT
				*
			    FROM
			    	usuario
			    WHERE 
					$atributo = $temp";

		//Ejecutar el query
		$resultado = $conexion -> ejecutarConsulta($query);
		//var_dump($resultado);
		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			$conexion -> cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			$conexion -> cerrar();

			if( $resultado[0][$atributo] == $dato ){
					$user = new usuarioClass($resultado[0]['id'],$resultado[0]['nombre'],$resultado[0]['mail'],
											$resultado[0]['pass'],$resultado[0]['direccion'],$resultado[0]['rfc'],
											$resultado[0]['telefono'],$resultado[0]['estatus'],$resultado[0]['tipo']);
					
					return $user;
				}
			else
				return FALSE;
		}			
	}
	function modificarDato($id,$dato,$atributo){
		//Conectarse a la base de datos
		require('dbdata.inc');
		require('dbClass.php');
		$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		
		if( $conexion->conecta() == FALSE)
			die('No se pudo hacer conexion a la BD');
		
		//limpiar variable
		$dato = $conexion->limpiarVariable($dato);
		
		if( $atributo != 'id' && $atributo != 'estatus' && $atributo != 'tipo' )
			$temp = '"'.$dato.'"' ;
		else
			$temp = $dato; 
		
		$query = "UPDATE
					usuario
				  SET
					$atributo = $temp
				  WHERE 
						id = $id";
		$resultado=$conexion ->ejecutarConsulta($query);
		$conexion ->cerrar();
		if(!$resultado)
			return FALSE;
		else
			return TRUE;		
				
	}
}

?>