<!DOCTYPE html>
<html>
<head>
	<title>Lista de Stock</title>
	<link rel="stylesheet" type="text/css" href="html/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="html/styles/listaStock.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>


	<header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipalEncargado">Librería Sarasa</a>
					<img src="html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="ListaPedidos">Despachar Pedidos</a>
					<a class="nav-link" href="Logout">Cerrar Sesión</a>
				</div>
			</div>
	</header>

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
			<td width="40"  align="center"><a href="ModificarArticulo-<?=$art['id_articulo']?>"><img src="html/imagenes/lapiz.png" width="22" height="22"></a></td>
			<td width="40" align="center"><a href="BorrarArticulo-<?=$art['id_articulo']?>"><img src="html/imagenes/tacho.png" width="22" height="22"></a></td>
			<td><?= $art['nombre'] ?></td>
			<td>$<?= $art['precio'] ?></td>
			<td><?= $art['detalle'] ?></td>
			<td><?= $art['stock'] ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<div class="buttons-wrapper">
		<a href="PaginaPrincipalEncargado" class="volver">Volver</a>
		<a href="CrearArticulo" class="agregar">Agregar nuevo</a>
	</div>

</body>
</html>