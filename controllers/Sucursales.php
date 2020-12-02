<?php

require '../fw/fw.php';
require '../views/ListaSucursales.php';
require '../models/sucursales.php'; 




$e = new Sucursales; 
$todos = $e->getTodos();


$v = new ListaSucursales();
$v->sucursales = $todos;
$v->render();