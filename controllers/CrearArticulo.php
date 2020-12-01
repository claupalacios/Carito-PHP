<?php


require '../fw/fw.php';
require '../models/Articulos.php';
require '../models/Categorias.php';
require '../views/FormAltaArticulo.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['tipo'])) die("error2");
	if(!isset($_POST['precio'])) die("error3");
	if(!isset($_POST['detalle'])) die("error4");
	if(!isset($_POST['stock'])) die("error5");

	(new Articulos)->alta($_POST['nombre'],$_POST['tipo'],$_POST['precio'],$_POST['detalle'],$_POST['stock']);
	header("Location: listastock.php");
	exit;
	

}
else{

	$c = new Categorias; 
	$todos = $c->getTodos();

	$form = new FormAltaArticulo;
	$form -> tipo = $todos;
	$form ->render();
}