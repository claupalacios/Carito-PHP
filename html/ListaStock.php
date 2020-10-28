<!DOCTYPE html>
<html>
<head>
	<title>Lista de Stock</title>
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
		<tr>
			<th></th><th></th>
			<th>Nombre</th>
			<th>Cantidad</th>
		</tr>
		<?php
		 foreach($this->stock as $e) {
		 ?>
		 
		<tr>
			<td width="40"  align="center"><a href="modificarstock.php?id=<?=$e['id_stock']?>"><img src="/proyecto/html/imagenes/lapiz.png" width="22" height="22"></a></td>
			<td width="40" align="center"><a href="borrarstock.php?id=<?=$e['id_stock']?>"><img src="/proyecto/html/imagenes/tacho.png" width="22" height="22"></a></td>
			<td><?= $e['nombre'] ?></td>
			<td><?= $e['cantidad'] ?></td>
		</tr>
		<?php } ?>
	</table>

		<nav aria-label="Page navigation example">
	 		<ul class="pagination justify-content-center">
	    		<li class="page-item">
	      			<a class="page-link" href="#" aria-label="Previous">
	        			<span aria-hidden="true">&laquo;</span>
	        			<span class="sr-only">Previous</span>
	      			</a>
	    		</li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
	      			<a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
	      			</a>
	    		</li>
	  		</ul>
		</nav>

	<div class="text-center">
		<a href="PaginaPrincipalEncargado.php" class="btn btn-primary btn-lg active">Volver</a> <a href="crearstock.php" class="btn btn-primary btn-lg active">Agregar nuevo </a>
	</div>

</body>
</html>