<?php

require '../fw/fw.php';
require '../views/AgregarArticulos.php';
require '../models/Articulos.php'; 
require '../models/Detalle.php'; 

if(isset($_POST['cantidad'])){
	if(!isset($_POST['id_articulo'])) die("error1");


		(new Detalle)->alta($_POST['id_pedido'],$_POST['id_articulo'],$_POST['cantidad']);
		header("Location: ConFin");
		exit;

}else{


	$c = new Articulos; 
	$todos = $c->getTodos();

	$p = new Detalle;
	$todas = $p->ultimo();

	$v = new AgregarArticulos();
	$v->articulos = $todos;
	$v->ultimo = $todas;
	$v->render();

}
