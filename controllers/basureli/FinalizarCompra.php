<?php

//controllers/Comidas.php

require '../fw/fw.php';
require '../views/FinalizarCompra.php';
require '../models/Detalle.php'; 



	$p = new Detalle;
	$ultimo = $p->ultimo();
	$todos = $p->carrito($ultimo);
	


	$v = new FinalizarCompra();
	$v->menu = $todos;
	$v->render();


