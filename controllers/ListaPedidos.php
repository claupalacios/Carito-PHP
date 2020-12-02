<?php

require '../fw/fw.php';
require '../views/ListaPedidos.php';
require '../models/Detalle.php'; 
require '../models/Articulos.php'; 
require '../models/Pedidos.php'; 

	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location:PaginaPrincipal.php");
		exit;
	}


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

if(isset($_POST['idDespachado'])){
	foreach ($_POST['idDespachado'] as $idDespachado) {
		$pedidosADespachar = (new Detalle)->buscarDp($idDespachado);
		foreach ($pedidosADespachar as $pedido) {
			$articuloADespachar = $pedido["id_articulo"];
			$cantidadADespachar = $pedido["cantidad"];
			(new Articulos)->modificarStock($articuloADespachar,$cantidadADespachar);
		}
		(new Pedidos)->despacharPedido($idDespachado);
	}
	header("Location: ListaPedidos.php");
	exit;
}


$v = new ListaPedidos();
$v->pedidos = $todos;
$v->primer = $primerpedido;
$v->cantidad = $cantidadPedidos;
$v->render();