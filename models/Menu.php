<?php
// MODELS/Menu.php
/**
* Modelo de datos de la clase Menu
*
* @package Restaurante
* @author Cinthia Palacios
* @version 1.0
*/

class Menu extends Model {
	/**
    * Función que retorna los menus
    *
    * @return array retorna los menus
    */
	public function getTodos(){
		$this->db->query("select * from menu");
		return $this->db->fetchAll();
	}
 	/**
    * Función que da de alta un nuevo menu en la base
    *
    * @param string $nombre string que representa el nombre del menu
    * @param int $precio entero que representa el precio del menu
    * @param int $tipo entero que representa el id del tipo de menu
    */
	public function alta($nombre, $precio, $tipo){
		if(strlen($nombre)<2) die("Verifique que haya ingresado correctamente el nombre");
		$nombre=substr($nombre, 0, 50);
		$nombre=$this->db->escapeString($nombre);
		
		
		if(!is_numeric($precio)) die("Verifique que haya ingresado correctamente el precio");
		if($precio<0) die("Verifique que haya ingresado correctamente el precio");

		if(!ctype_digit($tipo)) die("Debe seleccionar tipo de menu");


		$this->db->query("INSERT into menu
						(nombre, precio, tipo)
						values 
						('$nombre', $precio, $tipo)");
	}
	/**
    * Función que modifica los datos de un menu
    *
    * @param int $id entero que representa el id del menu a modificar
    * @param string $nombre string que representa el nombre del menu a modificar
    * @param int $precio entero que representa el precio del menu a modificar
    */
	public function modificar($id, $nombre, $precio){
		if(!ctype_digit($id)) die("id no es un digito");

		if(strlen($nombre)<2) die("Nombre no puede esatr vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) die("Precio no es un numero");
		if($precio<0) die("Precio no puede estar vacio");

		
		$this->db->query("UPDATE menu
						SET nombre='$nombre', precio='$precio'
						WHERE id_menu=$id");
}
	/**
    * Función que elimina un menu de la base
    *
    * @param int $id entero que representa el id del menu a eliminar
   	*/
	public function borrar($id){
		if(!ctype_digit($id)) die("error1");
			

		$this->db->query("DELETE
        FROM menu
        WHERE id_menu=$id
        LIMIT 1
        ");

}
	/**
    * Función que busca un menu especifico
    *
    * @param int $id entero que representa el id del menu a buscar
   	*/
	public function busquedaEspecifica($id){
			
		if(!ctype_digit($id)) die("id no es un digito");

		$this->db->query("SELECT *
		FROM menu
		WHERE id_menu=$id
		");

		if($this->db->numRows()!=1) die("error numrows");
		return $this->db->fetch();
		}
}
