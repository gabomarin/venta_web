<?php

/**
 * @package mvc
 * @subpackage model
 */
class usuarioBss extends DB{
	
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
		//require('dbdata.inc');
		//require_once('dbClass.php');
		//$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		 
		//if(!$conexion -> conecta())
			//die('No se ha podido realizar la conexion a la bd');


		//Limpiar las variables recibidas
			$nombre		=  parent::limpiarVariable($nombre);
			$mail		=  parent::limpiarVariable($mail);
			$pass		=  parent::limpiarVariable($pass);
			$direccion	=  parent::limpiarVariable($direccion);
			$rfc		=  parent::limpiarVariable($rfc);
			$elefono	=  parent::limpiarVariable($telefono);
			$estatus	=  parent::limpiarVariable($estatus);
			$tipo		=  parent::limpiarVariable($tipo);

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
		$resultado = parent::ejecutarConsulta($query);

		if($resultado == FALSE){
			echo 'FALLO la consulta';
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			$id = $resultado;
			//Cerrar la conexion
			parent::cerrar();

			//Arreglo del usuario
			$user = new usuarioClass($id,$nombre,$mail,$pass,$direccion,$rfc,$telefono,$estatus,$tipo);
	
			return $user;
		}
	}

	/**
	 * @return mixed array with all the users, or FALSE in fail
	 */
	function listar(){
	

		//Crear el query
		$query = 'SELECT
					*
				  FROM
					usuario';

		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);

		if(!$resultado){
			echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			parent::cerrar();

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
		//require('dbdata.inc');
		//require('dbClass.php');
		//$conexion  = new DB($hostdb, $userdb, $passdb, $db); 

		//if(!$conexion->conecta())
			//die('No se ha podido realizar la conexion a la bd');

		//Limpio las variables
		$dato = parent::limpiarVariable($dato);
		if( $atributo != 'id' && $atributo != 'estatus' && $atributo != '$atributo' )
			$temp = $dato;
		else
			$temp = $dato; 
		//echo $dato.'     ';
		//Crear el query
	
		$query = "SELECT
				*
			    FROM
			    	usuario
			    WHERE 
					$atributo ='$dato'";
					echo $query;


		//Ejecutar el query
		$resultado = parent::ejecutarConsulta($query);
		//var_dump($resultado);
		if(!$resultado){
			//echo 'FALLO la consulta';
			
			//Cerrar la conexion
			parent::cerrar();
			return FALSE;
		}
		else{
			//Cerrar la conexion
			parent::cerrar();
			
			//echo '<script>alert("consulta exitosa");</script>';
			//
			//if( $resultado[0][$atributo] == $dato ){
			//		$user = new usuarioClass($resultado[0]['id'],$resultado[0]['nombre'],$resultado[0]['mail'],
			//								$resultado[0]['pass'],$resultado[0]['direccion'],$resultado[0]['rfc'],
			//								$resultado[0]['telefono'],$resultado[0]['estatus'],$resultado[0]['tipo']);
			//		//var_dump($resultado);
			//		
					return $resultado;
				//}
			//else
			//	return FALSE;
		}			
	}
	function modificarDato($id,$dato,$atributo){
		//Conectarse a la base de datos
		//require('dbdata.inc');
		//require('dbClass.php');
		//$conexion  = new DB($hostdb, $userdb, $passdb, $db);
		
		
		//limpiar variable
		$dato = parent::limpiarVariable($dato);
		
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
		$resultado=parent::ejecutarConsulta($query);
		parent::cerrar();
		if(!$resultado)
			return FALSE;
		else
			return TRUE;		
				
	}
}

?>
