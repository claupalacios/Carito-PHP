<?php
// MODELS/Personas.php
/**
* Modelo de datos de la clase Personas
*
* @package Restaurante
* @author Cinthia Palacios
* @version 1.0
*/
class Personas extends Model {
	/**
    * Función que retorna las personas
    *
    * @return array retorna las personas
	*/
	public function getTodos(){
		$this->db->query("select * from personas");
		return $this->db->fetchAll();
	}
	/**
    * Función que retorna los datos de la persona que desea ingresar
    *
    * @param string $mail string representa el mail del usuario
    * @param string $contraseña string representa la contraseña del usuario
    * @return array retorna los datos de la persona que desea ingresar
	*/

	public function entrar($mail, $contrasena){
		if(strlen($mail)<2) die("Debe ingresar mail");
		$mail=substr($mail, 0, 50);
		$mail=$this->db->escapeString($mail);
		
		if(strlen($contrasena)<2) die("Debe ingresar contraseña");
		$contrasena=substr($contrasena, 0, 50);
		$contrasena=$this->db->escapeString($contrasena);
		

		

		$this->db->query("SELECT * 
						FROM personas
						WHERE mail='$mail' AND contrasena='$contrasena'");
		if($this->db->numRows()!=1) die("Contraseña incorrecta");
		return $this->db->fetch();
	}
}