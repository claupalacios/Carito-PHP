<?php

//controllers/PaginaPrincipal.php

require '../fw/fw.php';
require '../views/PaginaPrincipal.php';
require '../models/Comidas.php'; 


	$com = new Comidas; 
	$todos = $com->getTodos();

	
	$v = new PaginaPrincipal();
	$v->menu = $todos;
	$v->render();

