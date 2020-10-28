<?php


require '../fw/fw.php';
require '../models/empleados.php';
require '../views/FormModificarEmpleado.php';
require '../views/ModificarEmpleadoOk.php';



if(isset($_POST['nombre'])){

	(new Empleados)->modi($_GET['id'],$_POST['nombre'],$_POST['apellido'],$_POST['dni']
		,$_POST['fecha'],$_POST['direccion'],$_POST['telefono'],$_POST['mail']);

	


	$ok = new ModificarEmpleadoOk;
	$ok->render();

}
else{
	$form = new FormModificarEmpleado;
	$form ->render();
}