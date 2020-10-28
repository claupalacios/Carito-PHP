
<!DOCTYPE html>
<html>
<head>
	<title>Alta de empleado</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>

	<h1>Alta empleado</h1>
	<form action="" method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" id="n"/>
		<br><br>
		<label>Apellido:</label>
		<input type="text" name="apellido" id="a"/>
		<br><br>
		<label>DNI:</label>
		<input type="text" name="dni" id="d"/>
		<br><br>
		<label>Fecha de nacimiento:</label>
		<label for="y"> yyyy:</label>
 		<input type="text" name="anio" id="y">
		<label for="me"> mm:</label>
 		<input type="text" name ="mes" id="me">
 		<label for="d"> dd:</label>
 		<input type="text" name= "dia" id="d">
		<br><br>
		<label>Dirección:</label>
		<input type="text" name="direccion" id="dire"/>
		<br><br>
		<label>Teléfono:</label>
		<input type="text" name="telefono" id="t"/>
		<br><br>
		<label>Mail:</label>
		<input type="text" name="mail" id="m"/>
		<br><br>

<div class="text-center">
		<input type="submit" value="Agregar" class="btn btn-primary">
			<a href="listaempleados.php" class="btn btn-primary">Volver</a>
	</div>
	</form>


	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>