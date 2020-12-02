<?php
class Pedidos extends Model {
	

	//GET ALL
	public function getTodos(){
		$this->db->query("select * from pedidos");
		return $this->db->fetchAll();
	}
	
	//POST
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

	//PUT
	public function despacharPedido($idDespachado){

		if(!ctype_digit($idDespachado)) die("ID Despachado no es un digito");
			
		$this->db->query("UPDATE pedidos
						SET despachado=1 
						WHERE id_pedido = '$idDespachado'");
	}
	

	//GET LAST ONE
	public function ultimo(){
		$this->db->query("SELECT id_pedido from pedidos order by id_pedido DESC limit 1");
		return $this->db->fetchAll();
			
	}

	//DELETE
	public function borrarPedido($id_pedido){
		$this->db->query("DELETE FROM `pedidos` WHERE id_pedido = $id_pedido");
	}
	

	//GET CANTIDAD
	public function cantidad(){
		$this->db->query("select * from pedidos");
		return $this->db->numRows();
	}
}
	
	