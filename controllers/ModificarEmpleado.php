<?php


require '../fw/fw.php';
require '../models/empleados.php';
require '../views/FormModificarEmpleado.php';


if(isset($_GET['id'])){
	var_dump($_GET['id']);

if(isset($_POST['nombre'])){
	if(!isset($_POST['nombre'])) die("error1");
	if(!isset($_POST['apellido'])) die("error2");
	if(!isset($_POST['dni'])) die("error3");
	if(!isset($_POST['fecha'])) die("error4");
	if(!isset($_POST['direccion'])) die("error5");
	if(!isset($_POST['telefono'])) die("error6");
	if(!isset($_POST['mail'])) die("error7");

	(new Empleados)->modificar($_GET['id'],$_POST['nombre'],$_POST['apellido'],$_POST['dni']
		,$_POST['fecha'],$_POST['direccion'],$_POST['telefono'],$_POST['mail']);
	header("Location: listaempleados.php");

	exit;
	}
		$e=new Empleados;
		$todos=$e->busquedaEspecifica($_GET['id']); //aca tengo la info del producto
    
		$form = new FormModificarEmpleado;
		$form ->empleados=$todos;
		$form ->render();
	exit;


}
