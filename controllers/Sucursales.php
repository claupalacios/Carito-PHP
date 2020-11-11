<?php

//controllers/versucursales.php

require '../fw/fw.php';
require '../views/ListaSucursales.php';
require '../models/sucursales.php'; //requiere si no esta error faltal y muere, include no pasa nada




$e = new Sucursales; //las tablas n a n no tienen esto,()modelos
$todos = $e->getTodos();

//var_dump($todos);


$v = new ListaSucursales();
$v->sucursales = $todos;
$v->render();