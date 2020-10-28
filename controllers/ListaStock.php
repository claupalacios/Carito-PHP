<?php

//controllers/verempleados.php

require '../fw/fw.php';
require '../views/ListaStock.php';
require '../models/Stock.php'; //requiere si no esta error faltal y muere, include no pasa naranja




$e = new Stock; //las tablas n a n no tienen esto,()modelos
$todos = $e->getTodos();

//var_dump($todos);


$v = new ListaStock();
$v->stock = $todos;
$v->render();