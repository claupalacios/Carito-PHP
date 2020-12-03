<?php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../views/inicio.php';


session_start();

if(isset($_POST['mail'])&& isset($_POST['contrasena'])){
	if(!isset($_POST['mail'])) die("error1");
	if(!isset($_POST['contrasena'])) die("error2");

$p=new Empleados;	
$p->entrar($_POST['mail'],$_POST['contrasena']);
	
$_SESSION['logueado'] = true;

header('Location: PaginaPrincipalEncargado');
exit;

}else{
	$form = new inicio;
	$form ->render();
}