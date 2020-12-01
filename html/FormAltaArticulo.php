
<!DOCTYPE html>
<html>
<head>
	<title>Alta de Articulo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<h1>Alta Articulo</h1>
	<form action="" method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" id="n"/>
		<br><br>
		<label>Tipo:</label>
		<div>
		<select name="tipo" id="t">

        <?php
        foreach($this->tipo as $c) {
        ?> 
      	<option value="<?php echo $c['tipo'] ?>"><?php echo $c['descripcion'] ?></option>
        <?php } ?></select> 

      	</div>
		<label>Precio:</label>
		<input type="number" name="precio" id="p"/>
		<br><br>
		<label>Detalle:</label>
		<input type="text" name="detalle" id="d"/>
		<br><br>
		<label>Cantidad:</label>
		<input type="number" name="stock" id="c"/>
		<br><br>
		
		<div>
			<a href="listastock.php" class="btn btn-secondary">Volver</a>
			<input type=submit class="btn btn-primary" value="Continuar">
		</div>
	</div>
	</form>


</body>
</html>