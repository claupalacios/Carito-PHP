<?php 
require '../fw/fw.php';
require '../views/PaginaPrincipalEncargado.php';
require '../models/Categorias.php'; 
require '../models/Empleados.php';

	//if(!isset($_SESSION['']))
	$cat = new Categorias; 
	$todos = $cat->getTodos();


	$v = new PaginaPrincipalEncargado();
	$v->categorias = $todos;
	$v->render();

