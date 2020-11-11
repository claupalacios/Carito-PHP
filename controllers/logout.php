<?php

require '../fw/fw.php'; //aca van a estar todos los requires del framework
require '../views/Inicio.php';
require '../models/Login.php';


session_start(); //no olvidar

unset($_SESSION)



$e=new Inicio;  //controler pide datos a modelo
$e->render();

?>
