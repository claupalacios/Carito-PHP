<!DOCTYPE html>
<html>
<head>
	<title>Lista de Empleados</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>
	
	<table class="table">
		<thead class="thead-light">
			<tr><th></th><th></th><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Fecha de nac</th><th>Dirección</th><th>Telefono</th><th>Mail</th></tr>
		</thead>
		<?php foreach($this->empleados as $e) { ?>
		<tr>
			<td width="40"  align="center"><a href="modificarempleado.php?id=<?=$e['id_empleado']?>"><img src="/proyecto/html/imagenes/lapiz.png" width="22" height="22"></a></td>
			<td width="40" align="center"><a href="borrarempleado.php?id=<?=$e['id_empleado']?>"><img src="/proyecto/html/imagenes/tacho.png" width="22" height="22"></a></td>
			<td><?= $e['nombre'] ?></td>
			<td><?= $e['apellido'] ?></td>
			<td><?= $e['dni'] ?></td>
			<td><?= $e['fecha_nacimiento'] ?></td>
			<td><?= $e['direccion'] ?></td>
			<td><?= $e['telefono'] ?></td>
			<td><?= $e['mail'] ?></td>
		</tr>
		<?php } ?>
	</table>
	<div class="text-center">
		<a href="PaginaPrincipalEncargado.php" class="btn btn-primary btn-lg active">Volver</a> <a href="crearempleado.php" class="btn btn-primary btn-lg active">Agregar nuevo </a>
	</div>


	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>