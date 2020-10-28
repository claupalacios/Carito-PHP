<?php


require '../fw/fw.php';
require '../models/empleados.php';
require '../views/FormAltaEmpleado.php';




if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['apellido'])) die("error2");
	if(!isset($_POST['dni'])) die("error3");
	if(!isset($_POST['anio'])) die("error4");
	if(!isset($_POST['direccion'])) die("error5");
	if(!isset($_POST['telefono'])) die("error6");
	if(!isset($_POST['mail'])) die("error7");

	(new Empleados)->alta($_POST['nombre'],$_POST['apellido'],$_POST['dni']
		,$_POST['anio'],$_POST['mes'],$_POST['dia'],$_POST['direccion'],$_POST['telefono'],$_POST['mail']);

	
}
else{
	$form = new FormAltaEmpleado;
	$form ->render();
}