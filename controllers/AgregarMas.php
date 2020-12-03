<?php

require '../fw/fw.php';
require '../views/AgregarMasArticulos.php';
require '../models/Articulos.php'; 
require '../models/Detalle.php'; 

if(isset($_POST['cantidad'])){
	if(!isset($_POST['id_pedido'])) die("error1");
	if(!isset($_POST['id_articulo'])) die("error2");
	
	$d = new Detalle;
	if($d->buscarNr($_POST['id_pedido'],$_POST['id_articulo'])>= 1){
		$all = $d->buscarFa($_POST['id_pedido'],$_POST['id_articulo']);
		foreach($all as $e){
			$sumar = $e['cantidad'];
		}
		$d->modificar($_POST['id_pedido'],$_POST['id_articulo'],$_POST['cantidad']+$sumar);
		header("Location: ConFin");
		exit;
	}else{
		$d->alta($_POST['id_pedido'],$_POST['id_articulo'],$_POST['cantidad']);
		header("Location: ConFin");
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