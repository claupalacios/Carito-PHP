<?php

//controllers/Comidas.php

require '../fw/fw.php';
require '../views/MostrarComidasAgregadas.php';
require '../models/Menu.php'; 


	$c = new Menu; //las tablas n a n no tienen esto,()modelos
	$todos = $c->getTodos();


	$v = new MostrarComidasAgregadas();
	$v->menu = $todos;
	$v->render();


