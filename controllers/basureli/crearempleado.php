<?php


require '../fw/fw.php';
require '../models/empleados.php';
require '../views/FormAltaEmpleado.php';
require '../views/AltaEmpleadoOk.php';



if(isset($_POST['nombre'])){

	(new Empleados)->alta($_POST['nombre'],$_POST['apellido'],$_POST['dni']
		,$_POST['anio'],$_POST['mes'],$_POST['dia'],$_POST['direccion'],$_POST['telefono'],$_POST['mail']);

	


	$ok = new AltaEmpleadoOk;
	$ok->render();

}
else{
	$form = new FormAltaEmpleado;
	$form ->render();
}