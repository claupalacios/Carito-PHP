<?php


require '../fw/fw.php';
require '../views/MostrarArticulosAgregados.php';
require '../models/Articulos.php'; 


	$art = new Articulos; 
	$todos = $art->getTodos();


	$v = new MostrarArticulosAgregados();
	$v->articulos = $todos;
	$v->render();


