<?php

//controllers/elegirmenu.php

require '../fw/fw.php';
require '../views/ElegirMenu.php';
require '../models/Menu.php'; //requiere si no esta error faltal y muere, include no pasa naranja
require '../models/Detalle.php';


if(isset($_POST['cantidad'])){
/*	$p = new Pedidos;
	$p->ultimo*/
	(new Detalle)->alta($_POST['id_pedido'],$_POST['id_menu'],$_POST['cantidad'],$_POST['precio']);
	


	$ok = new AltaEmpleadoOk;
	$ok->render();

}else{
	$e = new Menu; //las tablas n a n no tienen esto,()modelos
	$todos = $e->getTodos();

	//var_dump($todos);


	$v = new ElegirMenu();
	$v->menu = $todos;
	$v->render();
}