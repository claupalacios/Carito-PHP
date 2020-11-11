<?php
// MODELS/Pedidos.php
class Pedidos extends Model {
	/**
    * Función que retorna los pedidos 
    *
    * @return array retorna los pedidos
	*/
	public function getTodos(){
		$this->db->query("select * from pedidos");
		return $this->db->fetchAll();
	}
	/**
    * Función que da de alta un nuevo pedido en la base
    *
    * @param int $id_pedido entero que representa el id del pedido
    * @param int $fecha entero que representa la fecha del pedido
    * @param string $direccion string que representa la direccion del pedido
    */
	public function alta($id_pedido,$fecha, $direccion ){

		if(!ctype_digit($id_pedido)) die("Pedido no es un digito");

		if(strlen($direccion)<2) die("Direccion no puede estar vacio");
		$direccion=substr($direccion, 0, 30);
		$direccion=$this->db->escapeString($direccion);


			
		$this->db->query("INSERT into pedidos
						(id_pedido,fecha, direccion)
						values 
						('$id_pedido', '$fecha', '$direccion')");
	}
	/**
    * Función que retorna el id del ultimo pedido
    *
    *@return array que retorna el id del ultimo pedido
    */
	public function ultimo(){
		$this->db->query("SELECT id_pedido from pedidos order by id_pedido DESC limit 1");
		return $this->db->fetchAll();
			
	}
	/**
    * Función que elimina un pedido de la base
    *
    * @param int $id_pedido entero que representa el id del pedido a eliminar
    */
	public function borrarPedido($id_pedido){
		$this->db->query("DELETE FROM `pedidos` WHERE id_pedido = $id_pedido");
	}
	/**
    * Función que retorna todos los datos de un pedido 
    *
    * @return array retorna todos los datos de un pedido
    */
	public function cantidad(){
		$this->db->query("select * from pedidos");
		return $this->db->numRows();
	}
}
	
	