<?php


require '../fw/fw.php';
require '../models/menu.php';
require '../views/FormModificarMenu.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['precio'])) die("error2");

	(new Menu)->modificar($_GET['id'],$_POST['nombre'],$_POST['precio']);
		header("Location: paginaprincipalencargado.php");
	



	exit;
	}
		$e=new Menu;
		$todos=$e->busquedaEspecifica($_GET['id']); //aca tengo la info del producto
    
		$form = new FormModificarMenu;
		$form ->menu=$todos;
		$form ->render();
	exit;