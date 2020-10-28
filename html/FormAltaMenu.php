<!DOCTYPE html>
<html>
<head>
	<title>Alta de menu</title>
</head>
<body>

	<h1>Alta menu</h1>
	<form action="" method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" id="n"/>
		<br><br>
		<label>Precio:</label>
		<input type="text" name="precio" id="p"/>
		<br><br>
		<label>Tipo:</label>
		<select name=tipo>
			<?php foreach($this->comidas as $e) { ?>
			<option value="<?=$e['tipo']?>"><?=$e['descripcion']?></option>
			<?php } ?>
		</select>
			
		<br/>
		<input type=submit value="continuar">
	</form>


</body>
</html>