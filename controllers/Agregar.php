<?php

//controllers/Comidas.php

require '../fw/fw.php';
require '../views/AgregarComidas.php';
require '../models/Menu.php'; 
require '../models/Detalle.php'; 

if(isset($_GET['cantidad'])){
	if(!isset($_GET['cantidad'])) die("error1");
	if(!isset($_GET['id_menu'])) die("error2");
	if(!isset($_GET['cantidad'])) die("error3");


		(new Detalle)->alta($_GET['id_pedido'],$_GET['id_menu'],$_GET['cantidad']);
		header("Location: ConFin.php");
		exit;

}else{


	$c = new Menu; 
	$todos = $c->getTodos();

	$p = new Detalle;
	$todas = $p->ultimo();


	$v = new AgregarComidas();
	$v->menu = $todos;
	$v->ultimo = $todas;
	$v->render();

}
