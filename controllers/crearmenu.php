<?php


require '../fw/fw.php';
require '../models/menu.php';
require '../models/comidas.php';
require '../views/FormAltaMenu.php';


$c=new Comidas;
$todos=$c->getTodos();

if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['precio'])) die("error2");
	if(!isset($_POST['tipo'])) die("error3");

	(new Menu)->alta($_POST['nombre'],$_POST['precio'], $_POST['tipo']);

	
}
else{
	$form = new FormAltaMenu;
	$form ->comidas=$todos;
	$form ->render();
	
}
