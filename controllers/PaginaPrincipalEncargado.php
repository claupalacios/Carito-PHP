<?php 
require '../fw/fw.php';
require '../views/PaginaPrincipalEncargado.php';
require '../models/Comidas.php'; 
require '../models/Empleados.php';
require '../models/Stock.php';

	//if(!isset($_SESSION['']))
	$com = new Comidas; 
	$todos = $com->getTodos();


	$v = new PaginaPrincipalEncargado();
	$v->menu = $todos;
	$v->render();

