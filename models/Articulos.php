<?php

class Articulos extends Model {



	//GET All
	public function getTodos(){
		$this->db->query("select * from articulos");
		return $this->db->fetchAll();
	}


	//POST
	public function alta($nombre, $tipo, $precio, $detalle, $stock){

		if(!is_numeric($tipo)) die("Verifique que haya ingresado correctamente el tipo");
		if($tipo<0) die("Verifique que haya ingresado correctamente el tipo");

		if(strlen($nombre)<2) die("Verifique que haya ingresado correctamente el nombre");
		$nombre=substr($nombre, 0, 50);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) die("Verifique que haya ingresado correctamente el precio");
		if($precio<0) die("Verifique que haya ingresado correctamente el precio");

		if(strlen($detalle)<2) die("Verifique que haya ingresado correctamente el detalle");
		$detalle=substr($detalle, 0, 50);
		$detalle=$this->db->escapeString($detalle);


		if(!is_numeric($stock)) die("Verifique que haya ingresado correctamente el stock");
		if($stock<0) die("Verifique que haya ingresado correctamente el stock");



		$this->db->query("INSERT into articulos
						(tipo, nombre, precio, detalle, stock)
						values 
						('$tipo', '$nombre', '$precio', '$detalle' , '$stock')");
	}


	//PUT
	public function modificar($id, $nombre, $precio, $detalle, $stock){
		if(!ctype_digit($id)) die("id no es un digito");

		if(strlen($nombre)<2) die("Nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) die("Precio no es un numero");
		if($precio<0) die("Precio no puede estar vacio");

		if(strlen($detalle)<2) die("Detalle no puede estar vacio");
		$detalle=substr($detalle, 0, 20);
		$detalle=$this->db->escapeString($detalle);

		if(!is_numeric($stock)) die("Stock no es un numero");

		
		$this->db->query("UPDATE articulos
						SET nombre='$nombre', precio='$precio', detalle='$detalle', stock='$stock'
						WHERE id_articulo=$id");
}

	//PUT
	public function modificarStock($id, $stock){
		if(!ctype_digit($id)) die("id no es un digito");

		if(!is_numeric($stock)) die("Stock no es un numero");
		if($stock<0) die("Stock no puede estar vacio");
	
		$this->db->query("SELECT stock from articulos WHERE id_articulo = '$id'");
		$aux = $this->db->fetch();
		$stockTotal = $aux['stock'];

		$stockFinal =  $stockTotal - $stock;

		if($stockFinal < 0 )die("No hay stock de producto");

		$this->db->query("UPDATE articulos
						SET stock='$stockFinal'
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
