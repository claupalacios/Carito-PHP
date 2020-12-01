<?php

//controllers/inicio.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/inicio.php';
require '../views/paginaprincipal.php';

if(isset($_POST['mail'])&& isset($_POST['contrasena'])){
	if(!isset($_POST['mail'])) die("error1");
	if(!isset($_POST['contrasena'])) die("error2");

$p=new Empleados;	
$p->entrar($_POST['mail'],$_POST['contrasena']);

header('Location: paginaprincipalencargado.php');

}else{
	$form = new inicio;
	$form ->render();
}