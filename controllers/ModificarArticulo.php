<?php


require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/FormModificarArticulo.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['precio'])) die("error3");
	if(!isset($_POST['detalle'])) die("error4");
	if(!isset($_POST['stock'])) die("error5");

	(new Articulos)->modificar($_GET['id'],$_POST['nombre'],$_POST['precio'],$_POST['detalle'],$_POST['stock']);

	header("Location: listastock.php");

exit;
	}
		$art=new Articulos;
		$todos=$art->busquedaEspecifica($_GET['id']); //aca tengo la info del producto
    
		$form = new FormModificarArticulo;
		$form ->articulo=$todos;
		$form ->render();
	exit;