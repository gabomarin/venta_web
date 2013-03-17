<?php

/**
 * @package
 * @subpackage
 * @author
 */

class DB{
	public $host;
	public $user;
	public $pass;
	public $db;
	public $cn;

	function __construct($dbhost, $dbuser, $dbpass, $db){
		$this -> host	= $dbhost;
		$this -> user	= $dbuser;
		$this -> pass	= $dbpass;
		$this -> db		= $db;
	}

	/**
	 * @return boolean
	 */
	function conecta(){
		$conexion =  new mysqli($this->host, $this->user, $this->pass, $this->db);
        if($conexion->connect_errno)
            return FALSE;
		$this -> cn = $conexion;
        return TRUE;
    }
	
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
			if ($resultado -> num_rows > 0)
				while($fila = $resultado->fetch_assoc())
					$resultado_array[] = $fila;
			return $resultado_array;
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
