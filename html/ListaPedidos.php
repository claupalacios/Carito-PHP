<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal Encargado</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<style type="text/css">
	    body {
	      margin: 50px;
	    }
	    .borders{
	    	border-top :3px solid black !important;
	    	border-bottom: 3px solid black !important;
	    }
  	</style>
</head>
<body>

	<table class="table">
		<thead class="thead-light">
		<tr>
			<th>Pedido Nº</th><th>Direccion</th><th>Tipo</th><th>Nombre</th><th>Cantidad</th><th>Precio</th><th>Despachado</th><th>Eliminar</th>
		</tr>
		</thead>
		<?php $contador = $this->primer; $total = 0 ?>
		<?php foreach ($this->pedidos as $p) { ?>
			<?php if ($contador!=$p['id_pedido']) { ?>
			<tr>
			<td class="borders" colspan='4'><td class="borders"><b>Total</b></td><td class="borders"><b><?=$total?></b></td><td class="borders"> </td><td class="borders"><a href="listaPedidos.php?borrar=<?=$p['id_pedido']-1?>"><img src="/restaurante/html/imagenes/tacho.png" width="22" height="22"></a></td>
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
			<td><input type="checkbox" name="" value="<?=$p['despachado']?>"></td>
			<?php $total = $total + $subtotal?>
			<?php $despachadoFlag = $p['despachado'] ?>
		</tr>
		<?php $contador=$p['id_pedido']; } ?>
		<?php if($this->cantidad >= 1){ ?>
		<tr>
<td class="borders" colspan='4'><td class="borders"><b>Total</b></td><td class="borders"><b><?=$total?></b></td><td class="borders"></td><td class="borders"><a href="listaPedidos.php?borrar=<?=$p['id_pedido']?>"><img src="/restaurante/html/imagenes/tacho.png" width="22" height="22"></a></td>
		</tr>
		<?php } ?>
	</table>

	<br>
	<div class="text-center">
	<a href="paginaprincipalencargado.php" class="btn btn-primary btn-lg active">Volver</a>
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>