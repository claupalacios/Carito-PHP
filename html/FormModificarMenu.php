
<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de menu</title>
</head>
<body>

	<h1>Modificacion de menu</h1>
	
	<form name="" method="POST">
	<table border=1>

		<tr><th>Nombre</th><th>Precio</th>
		
		
		<tr>
			<td><input type="text" name="nombre" value="<?= $this->menu['nombre']?>"id="n"/></td>
			<td><input type="text" name="precio" value="<?= $this->menu['precio']?>"id="p"/></td>
		
		</tr>
		<br><br>


		<input type=submit value="modificar">

		</form>

	</table>
		
	


</body>
</html>