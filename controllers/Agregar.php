<?php

require '../fw/fw.php';
require '../views/AgregarArticulos.php';
require '../models/Articulos.php'; 
require '../models/Detalle.php'; 

if(isset($_GET['cantidad'])){
	if(!isset($_GET['cantidad'])) die("error1");
	if(!isset($_GET['id_articulo'])) die("error2");
	if(!isset($_GET['cantidad'])) die("error3");


		(new Detalle)->alta($_GET['id_pedido'],$_GET['id_articulo'],$_GET['cantidad']);
		header("Location: ConFin.php");
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
