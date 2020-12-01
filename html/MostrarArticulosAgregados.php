<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Articulos Agregados</title>
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
			<?php foreach($this->articulos as $art) { 
				if($art['tipo']== $_GET['articulos']) { ?>
			<td><a href="agregarMas.php?id=<?=$art['id_articulo']?>&categorias=<?=$_GET['articulos']?>"><?= $art['nombre'] ?></a></td>
			<td><?= $art['precio'] ?></td>
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