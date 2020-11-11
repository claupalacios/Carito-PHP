<?php

class Articulos extends Model {



	//GET All

	public function getTodos(){
		$this->db->query("select * from articulos");
		return $this->db->fetchAll();
	}


	//POST

	public function alta($nombre, $precio, $tipo){
		if(strlen($nombre)<2) die("Verifique que haya ingresado correctamente el nombre");
		$nombre=substr($nombre, 0, 50);
		$nombre=$this->db->escapeString($nombre);
		
		
		if(!is_numeric($precio)) die("Verifique que haya ingresado correctamente el precio");
		if($precio<0) die("Verifique que haya ingresado correctamente el precio");

		if(!ctype_digit($tipo)) die("Debe seleccionar tipo de articulo");


		$this->db->query("INSERT into articulos
						(nombre, precio, tipo)
						values 
						('$nombre', $precio, $tipo)");
	}


	//PUT
	public function modificar($id, $nombre, $precio){
		if(!ctype_digit($id)) die("id no es un digito");

		if(strlen($nombre)<2) die("Nombre no puede esatr vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) die("Precio no es un numero");
		if($precio<0) die("Precio no puede estar vacio");

		
		$this->db->query("UPDATE articulos
						SET nombre='$nombre', precio='$precio'
						WHERE id_articulo=$id");
}


	//DELETE
	public function borrar($id){
		if(!ctype_digit($id)) die("error1");
			

		$this->db->query("DELETE
        FROM articulos
        WHERE id_articulo=$id
        LIMIT 1
        ");

}


	//GET By ID
	public function busquedaEspecifica($id){
			
		if(!ctype_digit($id)) die("id no es un digito");

		$this->db->query("SELECT *
		FROM articulos
		WHERE id_articulo=$id
		");

		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
		}
}
