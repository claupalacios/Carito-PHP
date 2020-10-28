<?php

//controllers/IngresarPedido.php

require '../fw/fw.php';
require '../views/IngresarPedido.php';
require '../models/Pedidos.php';
require '../models/Detalle.php';

if (isset($_GET['direccion'])) {
	if(!isset($_GET['direccion'])) die("error1");
	$dia = getdate();
	$formato = $dia["year"] ."-". $dia["mon"] ."-". $dia["mday"];
	(new Pedidos)->alta((new Detalle)->ultimo(),$formato,$_GET['direccion'],NULL);
	header("Location: CompraRealizada.php");
}

	$v = new IngresarPedido();
	$v->render();


