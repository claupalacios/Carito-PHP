<?php


require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/FormBorrarArticulo.php';




if(isset($_POST['Borrar'])){
	if(!isset($_POST['Borrar'])) die("error1");
	if(!isset($_GET['id'])) die("error2");
	(new Articulos)->borrar($_GET['id']);
	header("Location: listastock.php");
	exit;



}
else{
	$form = new FormBorrarArticulo;
	$form ->render();
}