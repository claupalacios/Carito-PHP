<?php

require '../fw/fw.php';
require '../views/ListaStock.php';
require '../models/Articulos.php';

	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location:PaginaPrincipal.php");
		exit;
	}


	$art = new Articulos; 
	$todos = $art->getTodos();
	$v = new ListaStock();
	$v->articulos = $todos;
	$v->render();