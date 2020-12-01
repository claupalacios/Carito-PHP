<!DOCTYPE html>
<html>
<head>
	<title>Lista de Stock</title>
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
		<tr>
			<th></th><th></th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Detalle</th>
			<th>Stock</th>
		</tr>
		<?php
		 foreach($this->articulos as $art) {
		 ?>
		 
		<tr>
			<td width="40"  align="center"><a href="ModificarArticulo.php?id=<?=$art['id_articulo']?>"><img src="../html/imagenes/lapiz.png" width="22" height="22"></a></td>
			<td width="40" align="center"><a href="BorrarArticulo.php?id=<?=$art['id_articulo']?>"><img src="../html/imagenes/tacho.png" width="22" height="22"></a></td>
			<td><?= $art['nombre'] ?></td>
			<td><?= $art['precio'] ?></td>
			<td><?= $art['detalle'] ?></td>
			<td><?= $art['stock'] ?></td>
		</tr>
		<?php } ?>
	</table>
	<div class="text-center">
		<a href="PaginaPrincipalEncargado.php" class="btn btn-secondary btn-lg active">Volver</a> 
		<a href="CrearArticulo.php" class="btn btn-primary btn-lg active">Agregar nuevo </a>
	</div>

</body>
</html>