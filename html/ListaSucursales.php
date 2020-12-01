<!DOCTYPE html>
<html>
<head>
	<title>Lista de Sucursales</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>
	<?php foreach($this->sucursales as $s) { ?>
		<div>
			<p><?= $s['nombre'] ?></p>
			<p><?= $s['direccion'] ?></p>
			<p><?= $s['telefono'] ?></p>
		</div>
		 <?php }
 	?>
	<div class="text-center">
		<a href="PaginaPrincipal.php" class="btn btn-primary btn-lg active">Volver</a>
	</div>


	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>