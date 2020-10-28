<?php

//controllers/verempleados.php

require '../fw/fw.php';
require '../views/ListaMenu.php';
require '../models/Menu.php'; //requiere si no esta error faltal y muere, include no pasa naranja

	$c = new Menu; //las tablas n a n no tienen esto,()modelos
	$todos = $c->getTodos();


	$v = new ListaMenu();
	$v->menu = $todos;
	$v->render();


