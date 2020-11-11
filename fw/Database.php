<?php

class Database{
	private $res;
	private $cn = false;
	private static $instance = false;

	private function __construct(){}

	public static function getInstance(){
		if(! self::$instance) self::$instance = new Database;     //metodo de clase va con ::  (static)
		return self::$instance;
	}

	private function connectIfNotConnect(){
		if(!$this->cn)
		   $this->cn = mysqli_connect("localhost","root","","libreria");
	}

	public function  query($q){
		$this->connectIfNotConnect();
		$this->res = mysqli_query($this->cn,$q);
		if(mysqli_error($this->cn) != ""){
			die("ERROR CONSULTA $q ----" . mysqli_error($this->cn));
		}
	}

	public function fetch(){
		if(!$this->res) throw new Exception("No se puede hacer fetch sin resultados");	
		return mysqli_fetch_assoc($this->res);
	}

	public function fetchAll(){
		$aux = array();
		while($fila = $this->fetch()) $aux[] = $fila; //corchete en blanco agrega la clave al array;
		return $aux;
	}

	public function numRows(){
		return mysqli_num_rows($this->res);
	}

	public function escapeString($str){
		$this-> connectIfNotConnect();
		return mysqli_escape_string($this->cn,$str);
	}
}

