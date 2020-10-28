<?php


require '../fw/fw.php';
require '../models/stock.php';
require '../views/FormBorrarMenu.php';




if(isset($_POST['borrar'])){
if(!isset($_POST['borrar'])) die("error1");
if(!isset($_GET['id'])) die("error2");
	(new Stock)->borrar($_GET['id']);
	header("Location: listastock.php");
	exit;



}
else{
	$form = new FormBorrarMenu;
	$form ->render();
}