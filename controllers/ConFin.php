<?php

require '../fw/fw.php';
require '../views/ContinuarFinalizar.php';
require '../models/Detalle.php';


	$p = new Detalle;
	$ultimo = $p->ultimo();
	$todos = $p->carrito($ultimo);
	$cantidad = $p->cantidad($ultimo);


if(isset($_GET['borrar'])){
	if(!isset($_GET['borrar'])) die("error1");
	if(!isset($_GET['ultimo'])) die("error2");

	$p->quitar($_GET['ultimo'],$_GET['borrar']);
	header('Location: conFin.php');
	exit;
}


	$v = new ContinuarFinalizar();
	$v->articulos =  $todos;
	$v->ultimo = $ultimo;
	$v->cantidad = $cantidad;
	$v->render();


