<?php
// MODELS/Stock.php
/**
* Modelo de datos de la clase Stock
*
* @package Restaurante
* @author Cinthia Palacios
* @version 1.0
*/
class Stock extends Model {
	/**
    * Función que retorna los stock
    *
    * @return array retorna los stock
    */
	public function getTodos(){
		$this->db->query("select * from stock");
		return $this->db->fetchAll();
	}
	/**
    * Función que da de alta un nuevo stock en la base
    *
    * @param string $nombre string que representa el nombre del stock
    * @param int $cantidad entero que representa la cantidad del stock
    */
	public function alta($nombre, $cantidad){
		if(strlen($nombre)<2) die("Nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 50);
		$nombre=$this->db->escapeString($nombre);
		
		
		if(!ctype_digit($cantidad)) die("Cantidad no es un digito");
		if($cantidad<0) die("Cantidad no puede estar vacio");

		$this->db->query("INSERT into stock
						(nombre, cantidad)
						values 
						('$nombre', '$cantidad')");
	}
	/**
    * Función que modifica los datos de un stock
    *
    * @param int $id entero que representa el id del stock a modificar
    * @param string $nombre string que representa el nombre del stock a modificar
    * @param int $cantidad entero que representa la cantidad del stock a modificar
    */
	public function modificar($id, $nombre, $cantidad){
		if(!ctype_digit($id)) die("id modificar no es un digito");

		if(strlen($nombre)<2) die("Nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($cantidad)) die("Cantidad no es un numero");
		if($cantidad<0) die("Cantidad no puede estar vacio");

		
		$this->db->query("UPDATE stock
						SET nombre='$nombre', cantidad='$cantidad'
						WHERE id_stock=$id");
}
	/**
    * Función que borra los datos de un stock
    *
    * @param int $id entero que representa el id del stock a eliminar
    */
	public function borrar($id){
		if(!ctype_digit($id)) die("Id borrar no es un digito");
			

		$this->db->query("DELETE
        FROM stock
        WHERE id_stock=$id
        LIMIT 1
        ");

}
	/**
    * Función que busca un stock especifico
    *
    * @param int $id entero que representa el id del stock a buscar
   	*/
	public function busquedaEspecifica($id){
		if(!ctype_digit($id)) die("Id busqueda no es un digito");

		$this->db->query("SELECT *
		FROM stock
		WHERE id_stock=$id
		");

		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
		}
}