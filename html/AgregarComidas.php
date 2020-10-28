

<!-- /html/AgergarComidas.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Agregar Comidas</title>
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
	  	<?php foreach($this->menu as $e) { 
		if(($e['id_menu']) == $_GET['id']){ ?>
			
			<h5 class="card-title"><?= $e['nombre']." $". $e['precio']?></h5>
		<?php }
		} ?>
	    <p class="card-text">Aca va la descripcion de la comida q debe
	    agregarse a la base de datos.</p>
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
			<input type="hidden" name="id_pedido" value="<?= $this->ultimo+1 ?>">
			<input type="submit" value="Agregar" class="btn btn-primary">
			<a href="comidas.php?comidas=<?=$_GET['comidas']?>" class="btn btn-primary">Volver</a>
		</form>
	  </div>
	</div>

	
	

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
