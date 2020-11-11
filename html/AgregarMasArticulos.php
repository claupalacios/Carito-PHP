<!DOCTYPE html>
<html>
<head>
	<title>Agregar Articulos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>

</head>
<body>

	<div class="card" style="width: 18rem;">
	  <img class="card-img-top" src="/proyecto/html/imagenes/pizzamuzzarella.png" alt="Imagen de Base de Datos">
	  <div class="card-body">
	  	<?php foreach($this->categorias as $c) { 
		if(($c['id_menu']) == $_GET['id']){ ?>
			
			<h5 class="card-title"><?= $c['nombre']." $". $c['precio']?></h5>
		<?php }
		} ?>
	    <!-- <p class="card-text">Descripcion del articulo q debe
	    agregarse a la base de datos.</p> -->
	    <form method="GET">
		<label>Cantidad: </label>
			<select name="cantidad">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
			<br>
			<input type="hidden" name="id_menu" value="<?= $_GET['id'] ?>">
			<input type="hidden" name="id_pedido" value="<?= $this->ultimo ?>">
			<input type="submit" value="Agregar" class="btn btn-primary">
			<a href="ArticulosAgregados.php?categorias=<?=$_GET['categorias']?>" class="btn btn-primary">Volver</a>
		</form>
	  </div>
	</div>

	
	

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Agregar Mas Comidas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

	
	<br>
	<?php foreach($this->menu as $e) { 
		if(($e['id_menu']) == $_GET['id']){
			echo $e['nombre'];
		}
	} ?>
	<form method="GET">
		<label>Cantidad: </label>
		<select name="cantidad">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		<br>
		<input type="hidden" name="id_menu" value="<?= $_GET['id'] ?>">
		<input type="hidden" name="id_pedido" value="<?= $this->ultimo ?>">
		<input type="submit" value="Agregar">
	</form>
	<a href="comidasAgregadas.php?comidas=<?=$_GET['comidas']?>">Volver</a>

	
	
</body>
</html>-->
