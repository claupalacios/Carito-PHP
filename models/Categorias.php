<?php

class Categorias extends Model {

	public function getTodos(){
		$this->db->query("select * from categorias");
		return $this->db->fetchAll();
	}

}