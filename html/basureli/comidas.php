<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		
		<table border=1>

			<tr><th>Nombre</th><th>Precio</th><th></th><th>Cantidad</th></tr>

			<?php foreach($this->menu as $e) { 
				if($e['tipo']==$_GET['comidas']){ ?>
			<td><?= $e['nombre'] ?></td>
			<td><?= $e['precio'] ?></td>
			<td><input type="radio" name="id_menu" value="<?= $e['id_menu'] ?>"></td>
			<td><input type="submit" name="" value="Agregar">
			<!--<td><input type="text" name="cantidad"></td>	-->
			</tr>

			<?php } } ?>
		</table>
		<input type="hidden" name="id_pedido" value="1">
		<input type="hidden" name="precio" value="100">
		<input type="hidden" name="cantidad" value="5">
		<input type="submit" value="Agregar">
		<input type="text" name="cantidad">
	</form>
	
	
</body>
</html>