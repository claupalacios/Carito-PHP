<?php

require '../fw/fw.php';
require '../views/IngresarPedido.php';
require '../models/Pedidos.php';
require '../models/Detalle.php';

if (isset($_POST['direccion'])) {
	if(!isset($_POST['direccion'])) die("error1");
	$dia = getdate();
	$formato = $dia["year"] ."-". $dia["mon"] ."-". $dia["mday"];
	(new Pedidos)->alta((new Detalle)->ultimo(),$formato,$_POST['direccion']);
	header("Location: CompraRealizada");
	exit;
}

	$v = new IngresarPedido();
	$v->render();


