<?php


require '../fw/fw.php';
require '../models/Articulos.php';
require '../views/FormBorrarArticulo.php';


	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location:PaginaPrincipal");
		exit;
	}


if(isset($_POST['Borrar'])){
	if(!isset($_POST['Borrar'])) die("error1");
	if(!isset($_GET["id_articulo"])) die("error2");
	(new Articulos)->borrar($_GET['id_articulo']);
	header("Location: ListaStock");
	exit;



}
else{
	$form = new FormBorrarArticulo;
	$form ->render();
}