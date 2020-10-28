<?php


require '../fw/fw.php';
require '../models/stock.php';
require '../views/FormAltaStock.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['cantidad'])) die("error2");

	(new Stock)->alta($_POST['nombre'],$_POST['cantidad']);
	

}
else{
	$form = new FormAltaStock;
	$form ->render();
}