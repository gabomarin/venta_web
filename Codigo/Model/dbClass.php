<?php

/**
 * @package
 * @subpackage
 * @author
 */ 
 
class DB{
	/*public $host;
	public $user;
	public $pass;
	public $db;*/
	var $cn;
	
	function __construct(){
		//$this->conecta();
		//Conectarse a la base de datos
		require('model/dbdata.inc');
		$cn  = new mysqli($hostdb,$userdb,$passdb,$db);
		if($cn->connect_errno)
			die('No se ha podido realizar la cn a la bd');
		$this->cn = $cn;
	}

	/** 
	 * @return boolean
	 */
	/*function conecta(){
		$cn =  new mysqli($this->host, $this->user, $this->pass, $this->db);
        if($cn->connect_errno)
            return FALSE;
		$this -> cn = $cn;
        return TRUE;
    }*/

	/**
	 * @param string $query
	 * @return mixed
	 * en caso de resultado que regrese un arreglo
	 * en caso de falla un false
	 * en caso de insert con id automatico, regresa el id
	 * en otros casos regresa cantidad de filas afectadas
	 */
	 function ejecutarConsulta($query){
	 	$resultado = $this -> cn -> query($query);
		if($this-> cn ->errno)
			return FALSE;
		if(is_object($resultado)){
			if ($resultado -> num_rows > 0){
				while($fila = $resultado->fetch_assoc())
					$resultado_array[] = $fila;
				return $resultado_array;
			}
			else return FALSE;
		}
		$pos = strpos($query,'INSERT');
		if($pos === 0)
			return $this->cn -> insert_id;
		return $this -> cn -> affected_rows;
	 }

	 /**
	  * @return boolean
	  */
	 function cerrar(){
	 	return $this -> cn -> close();
	 }

	 /**
	  * @param objecto mysqli $cn
	  * @param mixed $dato
	  * @return string
	  */
	 function limpiarVariable($dato){
	 	return $this -> cn -> real_escape_string($dato);
	 }

}	 