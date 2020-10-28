<?php
// MODELS/Comidas.php
/**
* Modelo de datos de la clase Comidas
*
* @package Restaurante
* @author Cinthia Palacios
* @version 1.0
*/

class Comidas extends Model {

    /**
    * Función que retorna las comidas
    *
    * @return array retorna las comidas
    */
	public function getTodos(){
		$this->db->query("select * from comidas");
		return $this->db->fetchAll();
	}

}