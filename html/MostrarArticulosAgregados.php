<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Comidas Agregadas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>

	<form method="POST">

		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">Nombre</th>
		      <th scope="col">Precio</th>
		    </tr>
		  </thead>
		  <tbody>
			<tr>
			<?php foreach($this->menu as $e) { 
				if($e['tipo']== $_GET['comidas']) { ?>
			<td><a href="agregarMas.php?id=<?=$e['id_menu']?>&comidas=<?=$_GET['comidas']?>"><?= $e['nombre'] ?></a></td>
			<td><?= $e['precio'] ?></td>
			</tr>

			<?php } } ?>
		  </tbody>
		</table>
		
	<div class="text-center">
	<a href="ContinuarAgregando.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" ">Volver</a>
	</div>
	

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html>
<head>
	<title>MostrarComidasAgregadas</title>
</head>
<body>

	<form method="POST">
		
		<table border=1>

			<tr><th>Nombre</th><th>Precio</th></tr>

			<?php foreach($this->menu as $e) { 
				if($e['tipo']== $_GET['comidas']) { ?>
			<td><a href="agregarMas.php?id=<?=$e['id_menu']?>&comidas=<?=$_GET['comidas']?>"><?= $e['nombre'] ?></a></td>
			<td><?= $e['precio'] ?></td>
			</tr>

			<?php } } ?>
		</table>

	<a href="ContinuarAgregando.php">Volver</a>
	
	
</body>
</html>-->