<?php

//controllers/verempleados.php

require '../fw/fw.php';
require '../views/ListaEmpleados.php';
require '../models/empleados.php'; //requiere si no esta error faltal y muere, include no pasa naranja




$e = new Empleados; //las tablas n a n no tienen esto,()modelos
$todos = $e->getTodos();

//var_dump($todos);


$v = new ListaEmpleados();
$v->empleados = $todos;
$v->render();