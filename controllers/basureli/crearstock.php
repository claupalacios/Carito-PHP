<?php


require '../fw/fw.php';
require '../models/stock.php';
require '../views/FormAltaStock.php';
require '../views/AltaStockOk.php';



if(isset($_POST['nombre'])){

	(new Stock)->alta($_POST['nombre'],$_POST['cantidad']);
	


	$ok = new AltaStockOk;
	$ok->render();

}
else{
	$form = new FormAltaStock;
	$form ->render();
}