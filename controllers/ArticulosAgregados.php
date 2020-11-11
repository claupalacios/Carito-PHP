<?php


require '../fw/fw.php';
require '../views/MostrarArticulosAgregados.php';
require '../models/Categorias.php'; 


	$c = new Categorias; //las tablas n a n no tienen esto,()modelos
	$todos = $c->getTodos();


	$v = new MostrarArticulosAgregados();
	$v->menu = $todos;
	$v->render();


