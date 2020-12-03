<?php


require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/FormModificarArticulo.php';


	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location:PaginaPrincipal");
		exit;
	}

if(isset($_POST['nombre'])){
	if(!isset($_POST['precio'])) die("error1");
	if(!isset($_POST['detalle'])) die("error2");
	if(!isset($_POST['stock'])) die("error3");

	(new Articulos)->modificar($_GET['id_articulo'],$_POST['nombre'],$_POST['precio'],$_POST['detalle'],$_POST['stock']);

	header("Location: ListaStock");

exit;
	}
		$art=new Articulos;
		$todos=$art->busquedaEspecifica($_GET['id_articulo']);
    
		$form = new FormModificarArticulo;
		$form ->articulo=$todos;
		$form ->render();
	exit;