
<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de stock</title>
</head>
<body>

	<h1>Modificacion de stock</h1>
	
	<form name="" method="POST">
	<table border=1>

		<tr><th>Nombre</th><th>Cantidad</th>
		
		
		<tr>
			<td><input type="text" name="nombre" id="n" value="<?= $this->stock['nombre']?>"/></td>
			<td><input type="text" name="cantidad" id="c" value="<?= $this->stock['cantidad']?>"/></td>
		
		</tr>
		<br><br>


		<input type=submit value="continuar">

		</form>

	</table>
		
	


</body>
</html>