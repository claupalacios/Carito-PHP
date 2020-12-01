<?php

//controllers/ContinarAgregando.php

require '../fw/fw.php';
require '../views/ContinuarAgregando.php';
require '../models/Categorias.php'; 


	$art = new Categorias; 
	$todos = $art->getTodos();


	$v = new ContinuarAgregando();
	$v->categorias = $todos;
	$v->render();

