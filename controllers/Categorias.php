<?php

require '../fw/fw.php';
require '../views/MostrarArticulos.php';
require '../models/Articulos.php'; 


	$articulos = new Articulos; //las tablas n a n no tienen esto,()modelos
	$todos = $articulos->getTodos();

	$v = new MostrarArticulos();
	$v->articulos = $todos;
	$v->render();


