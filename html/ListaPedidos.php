

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal Encargado</title>
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
			<th>Numero de Pedido</th><th>Direccion</th><th>Tipo</th><th>Nombre</th><th>Cantidad</th><th>Precio</th>
		</tr>
		</thead>
		<?php $contador = $this->primer; $total = 0 ?>
		<?php foreach ($this->pedidos as $p) { ?>
			<?php if ($contador!=$p['id_pedido']) { ?>
			<tr>
			<td></td><td></td><td><td></td></td><td>Total</td><td><?=$total?></td><td><a href="listaPedidos.php?borrar=<?=$p['id_pedido']-1?>">Quitar</a></td>
			</tr>
			<?php $total=0 ?>
		<?php  } ?>
		<tr>
			<td><?=$p['id_pedido']?></td>
			<td><?=$p['direccion']?></td>		
			<td><?=$p['descripcion']?></td>
			<td><?=$p['nombre']?></td>		
			<td><?=$p['cantidad']?></td>
			<?php $subtotal = $p['precio']*$p['cantidad'] ?>
			<td><?=$subtotal?></td>
			<?php $total = $total + $subtotal?>
		</tr>
		<?php $contador=$p['id_pedido']; } ?>
		<?php if($this->cantidad >= 1){ ?>
		<tr>
			<td></td><td></td><td><td></td></td><td>Total</td><td><?=$total?></td><td><a href="listaPedidos.php?borrar=<?=$p['id_pedido']?>">Quitar</a></td>
		</tr>
		<?php } ?>
	</table>

	<br>
	<div class="text-center">
	<a href="paginaprincipalencargado.php" class="btn btn-primary btn-lg active">volver</a>
	</div>






<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
 