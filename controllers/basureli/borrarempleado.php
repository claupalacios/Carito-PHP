<?php


require '../fw/fw.php';
require '../models/empleados.php';
require '../views/FormBorrarEmpleado.php';
require '../views/BorrarEmpleadoOk.php';



if(isset($_POST['borrar'])){

	(new Empleados)->borrar($_GET['id']);

	


	$ok = new BorrarEmpleadoOk;
	$ok->render();

}
else{
	$form = new FormBorrarEmpleado;
	$form ->render();
}