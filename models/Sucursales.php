<?php
// MODELS/Sucursales.php
class Sucursales extends Model {
	
	/**
    * Función que retorna las sucursales
    *
    * @return array retorna las sucursales
    */
	public function getTodos(){
		$this->db->query("select * from sucursales");
		return $this->db->fetchAll();
	}



}