<?php

//controllers/ContunarAgregando.php

require '../fw/fw.php';
require '../views/ContinuarAgregando.php';
require '../models/Comidas.php'; 


	$com = new Comidas; 
	$todos = $com->getTodos();


	$v = new ContinuarAgregando();
	$v->menu = $todos;
	$v->render();

