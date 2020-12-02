<?php
class Sucursales extends Model {
	
	
	//GET All
	public function getTodos(){
		$this->db->query("select * from sucursales");
		return $this->db->fetchAll();
	}



}