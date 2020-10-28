<?php
//controllers/creardetalle.php


require '../fw/fw.php';
require '../models/Detalle.php';
require '../views/ElegirMenu.php';
require '../models/Pedidos.php';



if(isset($_POST['cantidad'])){
/*	$p = new Pedidos;
	$p->ultimo*/
	(new Detalle)->alta($_POST['id_pedido'],$_POST['id_menu'],$_POST['cantidad'],$_POST['precio']);
	/*header("Location: ElegirMenu.php");  
	


	$ok = new AltaEmpleadoOk;
	$ok->render();
*/
}
else{
	$form = new ElegirMenu;
	$form ->render();
}