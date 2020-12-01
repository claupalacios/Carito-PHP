
<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de Articulos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<h1>Modificación de Articulos</h1>
	<table border=1>
	<form name="" method="POST">
		<div>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Detalle</th>
				<th>Cantidad</th>
			</tr>		
			<tr>
				<td><input type="text" name="nombre" id="n" value="<?= $this->articulo['nombre']?>"/></td>
				<td><input type="number" name="precio" id="p" value="<?= $this->articulo['precio']?>"/></td>
				<td><input type="text" name="detalle" id="d" value="<?= $this->articulo['detalle']?>"/></td>
				<td><input type="number" name="stock" id="s" value="<?= $this->articulo['stock']?>"/></td>
			
			</tr>
			<br><br>
		</div>
	</table>
			<br><br>
	
	<div class="text-center">
		<a href="listastock.php" class="btn btn-secondary">Volver</a>
		<input type=submit class="btn btn-primary" value="Continuar">
	</div>

		</form>

		
	


</body>
</html>