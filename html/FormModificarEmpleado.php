<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de empleado</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>

	<h1>Modificacion de empleado</h1>
	
	<form name="" method="POST">
	<table class="table">
		<thead class="thead-light">

		<tr><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Fecha de nacimiento</th><th>Dirección</th><th>Telefono</th><th>Mail</th></tr>
		</thead>
		 
		<tr>
			<td><input type="text" value="<?= $this->empleados['nombre']?>" name="nombre" id="n"/></td>
			<td><input type="text" value="<?= $this->empleados['apellido']?>" name="apellido" id="a"/></td>
			<td><input type="text" value="<?= $this->empleados['dni']?>" name="dni" id="d"/></td>
			<td><input type="text" value="<?= $this->empleados['fecha_nacimiento']?>" name="fecha" id="f"/></td>
			<td><input type="text" value="<?= $this->empleados['direccion']?>" name="direccion" id="dire"/></td>
			<td><input type="text" value="<?= $this->empleados['telefono']?>" name="telefono" id="t"/></td>
			<td><input type="text" value="<?= $this->empleados['mail']?>" name="mail" id="m"/></td>
		</tr>
	</table>
	<input type=submit value="Modificar">
	</form>

	
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>