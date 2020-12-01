<?php

//controllers/listaPedidos.php

require '../fw/fw.php';
require '../views/ListaPedidos.php';
require '../models/Detalle.php'; 
require '../models/Pedidos.php'; 




$e = new Detalle;
$todos = $e->pedidos();
$primerpedido = $e->primerpedido();

$p = new Pedidos;
$cantidadPedidos = $p->cantidad();

if(isset($_GET['borrar'])){
	$e->borrarpedido($_GET['borrar']);
	$p->borrarpedido($_GET['borrar']);
	header('Location: ListaPedidos.php');
	exit;
}


$v = new ListaPedidos();
$v->pedidos = $todos;
$v->primer = $primerpedido;
$v->cantidad = $cantidadPedidos;
$v->render();