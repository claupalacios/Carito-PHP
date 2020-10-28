<?php

//controllers/ConFin.php

require '../fw/fw.php';
require '../views/PedidoEliminado.php';
require '../models/Detalle.php';

	$p = new Detalle;
	$ultimo = $p->ultimo();
	$todos = $p->carrito($ultimo);
	$cantidad = $p->cantidad($ultimo);


if(isset($_GET['borrar'])){
	$p->quitar($_GET['ultimo'],$_GET['borrar']);
}


	$v = new PedidoEliminado();
	$v->render();

