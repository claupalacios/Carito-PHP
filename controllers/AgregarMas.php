<?php

require '../fw/fw.php';
require '../views/AgregarMasArticulos.php';
require '../models/Articulos.php'; 
require '../models/Detalle.php'; 

if(isset($_GET['cantidad'])){
	if(!isset($_GET['cantidad'])) die("error1");
	if(!isset($_GET['id_pedido'])) die("error2");
	if(!isset($_GET['id_articulo'])) die("error3");
	
	$d = new Detalle;
	if($d->buscarNr($_GET['id_pedido'],$_GET['id_articulo'])>= 1){
		$all = $d->buscarFa($_GET['id_pedido'],$_GET['id_articulo']);
		foreach($all as $e){
			$sumar = $e['cantidad'];
		}
		$d->modificar($_GET['id_pedido'],$_GET['id_articulo'],$_GET['cantidad']+$sumar);
		header("Location: ConFin.php");
		exit;
	}else{
		$d->alta($_GET['id_pedido'],$_GET['id_articulo'],$_GET['cantidad']);
		header("Location: ConFin.php");
		exit;
	}

}else{


	$art = new Articulos; 
	$todos = $art->getTodos();

	$p = new Detalle;
	$todas = $p->ultimo();


	$v = new AgregarMasArticulos();
	$v->articulos = $todos;
	$v->ultimo = $todas;
	$v->render();

}
