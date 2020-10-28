<?php

//controllers/Comidas.php

require '../fw/fw.php';
require '../views/MostrarComidas.php';
require '../models/Menu.php'; 


	$c = new Menu; //las tablas n a n no tienen esto,()modelos
	$todos = $c->getTodos();


	$v = new MostrarComidas();
	$v->menu = $todos;
	$v->render();


