<?php 
require '../fw/fw.php';
require '../views/PaginaPrincipalEncargado.php';
require '../models/Categorias.php'; 
require '../models/Empleados.php';


	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location:PaginaPrincipal.php");
		exit;
	}

	$cat = new Categorias; 
	$todos = $cat->getTodos();


	$v = new PaginaPrincipalEncargado();
	$v->render();

