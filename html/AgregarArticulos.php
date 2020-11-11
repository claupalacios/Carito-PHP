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
	  <!--<img class="card-img-top" src="" alt="Imagen de Base de Datos">-->
	  <div class="card-body">
	  	<?php foreach($this->articulos as $a) { 
		if(($a['id_articulo']) == $_GET['id']){ ?>
			
			<h5 class="card-title"><?= $a['nombre']." $". $a['precio']?></h5>
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
			<input type="hidden" name="id_articulo" value="<?= $_GET['id'] ?>">
			<input type="hidden" name="id_pedido" value="<?= $this->ultimo+1 ?>">
			<input type="submit" value="Agregar" class="btn btn-primary">
			<a href="categorias.php?categorias=<?=$_GET['categorias']?>" class="btn btn-primary">Volver</a>
		</form>
	  </div>
	</div>

	
	

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
