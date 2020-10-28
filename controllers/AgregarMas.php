<?php

//controllers/Comidas.php

require '../fw/fw.php';
require '../views/AgregarMasComidas.php';
require '../models/Menu.php'; 
require '../models/Detalle.php'; 

if(isset($_GET['cantidad'])){
	if(!isset($_GET['cantidad'])) die("error1");
	if(!isset($_GET['id_pedido'])) die("error2");
	if(!isset($_GET['id_menu'])) die("error3");
	
	$d = new Detalle;
	if($d->buscarNr($_GET['id_pedido'],$_GET['id_menu'])>= 1){
		$all = $d->buscarFa($_GET['id_pedido'],$_GET['id_menu']);
		foreach($all as $e){
			$sumar = $e['cantidad'];
		}
		$d->modificar($_GET['id_pedido'],$_GET['id_menu'],$_GET['cantidad']+$sumar);
		header("Location: ConFin.php");
		exit;
	}else{
		$d->alta($_GET['id_pedido'],$_GET['id_menu'],$_GET['cantidad']);
		header("Location: ConFin.php");
		exit;
	}

}else{


	$c = new Menu; 
	$todos = $c->getTodos();

	$p = new Detalle;
	$todas = $p->ultimo();


	$v = new AgregarMasComidas();
	$v->menu = $todos;
	$v->ultimo = $todas;
	$v->render();

}
