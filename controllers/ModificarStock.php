<?php


require '../fw/fw.php';
require '../models/stock.php';
require '../views/FormModificarStock.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['cantidad'])) die("error2");

	(new Stock)->modificar($_GET['id'],$_POST['nombre'],$_POST['cantidad']);

	header("Location: listastock.php");

exit;
	}
		$e=new Stock;
		$todos=$e->busquedaEspecifica($_GET['id']); //aca tengo la info del producto
    
		$form = new FormModificarStock;
		$form ->stock=$todos;
		$form ->render();
	exit;