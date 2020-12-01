<?php

class Empleados extends Model {



	//GET ALL
	public function getTodos(){
		$this->db->query("select * from empleados");
		return $this->db->fetchAll();
	}
	

	//INGRESAR
	public function entrar($mail, $contrasena){
		if(strlen($mail)<2) die("Debe ingresar mail");
		$mail=substr($mail, 0, 50);
		$mail=$this->db->escapeString($mail);
		
		if(strlen($contrasena)<2) die("Debe ingresar contraseña");
		$contrasena=substr($contrasena, 0, 50);
		$contrasena=$this->db->escapeString($contrasena);
		

		

		$this->db->query("SELECT * 
						FROM empleados
						WHERE mail='$mail' AND contrasena='$contrasena'");
		if($this->db->numRows()!=1) die("Contraseña incorrecta");
		return $this->db->fetch();
	}
}