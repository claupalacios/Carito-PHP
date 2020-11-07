<!DOCTYPE html>
<html>
<head>
	<title>Lista de Menu</title>
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
			<tr><th></th><th></th><th>Nombre</th><th>Precio</th></tr>
		</thead>

			<?php foreach($this->menu as $e) { 
			if($e['tipo']== $_GET['comidas']) { ?>
		<tr><td width="40"  align="center"><a href="modificarmenu.php?id=<?=$e['id_menu']?>"><img src="/restaurante/html/imagenes/lapiz.png" width="22" height="22"></a></td>
			<td width="40" align="center"><a href="borrarmenu.php?id=<?=$e['id_menu']?>"><img src="/restaurante/html/imagenes/tacho.png" width="22" height="22"></a></td>
		
			<td><?= $e['nombre'] ?></a></td>
			<td><?= $e['precio'] ?></td>
			</tr>

			<?php } } ?>
		</table>
	<div class="text-center">
		<a href="PaginaPrincipalEncargado.php" class="btn btn-primary btn-lg active">Volver</a> <a href="crearmenu.php" class="btn btn-primary btn-lg active">Agregar nuevo </a>
	</div>


</body>
</html>