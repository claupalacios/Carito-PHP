<?php

//controllers/PaginaPrincipal.php

require '../fw/fw.php';
require '../views/PaginaPrincipal.php';
require '../models/Categorias.php'; 


	$cat = new Categorias; 
	$todos = $cat->getTodos();

	$v = new PaginaPrincipal();
	$v->categorias = $todos;
	$v->render();

