<?php

//controllers/verempleados.php

require '../fw/fw.php';
require '../views/ListaStock.php';
require '../models/Articulos.php';




	$art = new Articulos; 
	$todos = $art->getTodos();
	$v = new ListaStock();
	$v->articulos = $todos;
	$v->render();