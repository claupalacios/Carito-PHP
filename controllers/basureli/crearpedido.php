<?php


require '../fw/fw.php';
require '../models/Pedidos.php';
require '../views/AltaPedido.php';



if(isset($_POST['direccion'])){

	(new Pedidos)->alta($_POST['fecha'],$_POST['direccion'],$_POST['id_cliente']);
	header("Location: elegirmenu.php");  
	


/*	$ok = new AltaEmpleadoOk;
	$ok->render();*/

}
else{
	$form = new AltaPedido;
	$form ->render();
}