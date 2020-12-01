<?php
// MODELS/Detalle.php
class Detalle extends Model {
	

	//GET ALL
	public function getTodos(){
		$this->db->query("select * from detalle_pedidos");
		return $this->db->fetchAll();
	}

	//POST
	public function alta($id_pedido,$id_articulo,$cantidad){
		if(!ctype_digit($id_pedido)) die("el pedido no es un digito");
		if(!ctype_digit($id_articulo)) die("el articulo no es un digito");
		if(!is_numeric($cantidad)) die("la cantidad no es un numero");
		

		$this->db->query("INSERT into detalle_pedidos
						(id_pedido,id_articulo,cantidad)
						values 
						('$id_pedido','$id_articulo','$cantidad')");
	}
	/**
    * Función que retorna el ultimo id_pedido de la tabla detalle_pedidos
    *
    * @return array retorna el ultimo id_pedido de la tabla detalle_pedidos
	*/
	public function ultimo(){
		$this->db->query("SELECT id_pedido from detalle_pedidos order by id_pedido DESC limit 1");
		$aux = $this->db->fetch();
		return $aux['id_pedido'];
	}
	/**
    * Función que retorna el ultimo id_articulo de la tabla detalle_pedidos
    *
    * @return array retorna el ultimo id_articulo de la tabla detalle_pedidos
    */
	public function ultimoMenu(){
		$this->db->query("SELECT id_articulo from detalle_pedidos order by id_pedido DESC limit 1");
		$aux = $this->db->fetch();
		return $aux['id_articulo'];
	}
	/**
    * Función que retorna el nombre, precio y cantidad del ultimo dato de detalle_pedidos
    *
    * @param id $ultimo entero representa el ultimo id_pedido de la tabla detalle_pedidos
    * @return array retorna el nombre, precio y cantidad del ultimo dato de detalle_pedidos
	*/
	public function carrito($ultimo){
		$this->db->query("SELECT nombre,precio,cantidad,d.id_articulo FROM `detalle_pedidos` d left join articulos a on a.id_articulo = d.id_articulo where id_pedido = $ultimo");
		return $this->db->fetchAll();
	}
	/**
    * Función que elimina el ultimo dato de la tabla detalle_pedidos
    *
    * @param int $ultimo entero representa el ultimo id_pedido de la tabla detalle_pedidos
    * @return array retorna el ultimo detalle pedido
	*/
	public function quitar($ultimo,$borrarArticulo){
		$this->db->query("DELETE FROM `detalle_pedidos` WHERE `detalle_pedidos`.`id_pedido` = $ultimo AND `detalle_pedidos`.`id_articulo` = $borrarArticulo");
	}
	/**
    * Función que retorna la cantidad que contiene el ultimo dato de la tabla detalle_pedidos
    *
    * @param int $ultimo entero representa el ultimo id_pedido de la tabla detalle_pedidos
    * @return array retorna la cantidad que contiene el ultimo dato de la tabla detalle_pedidos
	*/
	public function cantidad($ultimo){
		$this->db->query("SELECT nombre,precio,cantidad,d.id_articulo FROM `detalle_pedidos` d left join articulos c on c.id_articulo = d.id_articulo where id_pedido = $ultimo");
		return $this->db->numRows();
	}
	/**
    * Función que retorna la unicacion de un detalle_pedido especifico
    *
    * @param int $id_pedido entero representa el id de un pedido
    * @param int $id_articulo entero representa el id de un articulo
    * @return array retorna la ubicacion del articulo
	*/
	public function buscarNr($id_pedido,$id_articulo){

		$this->db->query("SELECT * FROM `detalle_pedidos` d where id_pedido = $id_pedido AND id_articulo = $id_articulo");
		return $this->db->numRows();
	}
	/**
    * Función que retorna los datos de un detalle_pedido especifico
    *
    * @param int $id_pedido entero representa el id de un pedido 
    * @param int $id_articulo entero representa el id de un articulo 
    * @return array retorna los datos de un detalle_pedido especifico
   	*/
	public function buscarFa($id_pedido,$id_articulo){
		$this->db->query("SELECT * FROM `detalle_pedidos` d where id_pedido = $id_pedido AND id_articulo = $id_articulo");
		return $this->db->fetchAll();
	}
	/**
    * Función que modifica la cantidad que contiene un dato especifico de la tabla detalle_pedidos
    *
    * @param int $id_pedido entero representa el id del pedido
    * @param int $id_articulo entero representa el id del articulo del pedido
    * @param int $cantidad entero representa la cantidad de articulo del pedido
	*/
	public function modificar($id_pedido,$id_articulo,$cantidad){
		if(!ctype_digit($id_pedido)) die("pedido no es un digito");
		if(!ctype_digit($id_articulo)) die("articulo no es un digito");
		if(!is_numeric($cantidad)) die("cantidad no es un numero");
		

		$this->db->query("UPDATE `detalle_pedidos` 
						  SET `cantidad` = '$cantidad' 
						  WHERE `detalle_pedidos`.`id_pedido` = $id_pedido AND `detalle_pedidos`.`id_articulo` = $id_articulo;");
	}	
	
	public function pedidos(){
		$this->db->query("SELECT d.id_pedido, c.descripcion, a.nombre, d.cantidad, a.precio, p.direccion,p.despachado
							FROM `detalle_pedidos`d
							left JOIN articulos a ON d.id_articulo = a.id_articulo
							LEFT JOIN categorias c on a.tipo = c.tipo
							LEFT JOIN pedidos p ON p.id_pedido = d.id_pedido");
		return $this->db->fetchAll();

	}
	/**
    * Función que retorna el primer dato de la tabla detalle_pedidos
    *
    * @return array retorna el primer dato de la tabla detalle_pedidos
	*/
	public function primerPedido(){
		$this->db->query("SELECT id_pedido from detalle_pedidos limit 1");
		$aux = $this->db->fetch();
		return $aux['id_pedido'];
	}
	/**
    * Función que elimina un dato de la tabla detalle_pedidos
    *
    * @param int que representa el id del pedido a eliminar
	*/
	public function borrarPedido($id_pedido){
		$this->db->query("DELETE FROM `detalle_pedidos` WHERE id_pedido = $id_pedido");
	}

}