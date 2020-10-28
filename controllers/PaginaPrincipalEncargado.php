<?php 
require '../fw/fw.php';
require '../views/PaginaPrincipalEncargado.php';
require '../models/Comidas.php'; 
require '../models/Empleados.php';
require '../models/Stock.php';


	$com = new Comidas; 
	$todos = $com->getTodos();


	$v = new PaginaPrincipalEncargado();
	$v->menu = $todos;
	$v->render();

