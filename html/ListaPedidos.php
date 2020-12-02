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
		border-bottom: 3px solid black !important;
	}
</style>

<script type="text/javascript">
	function despacharPedido(idPedido) {
		var id = idPedido;
		if ( $('#'+id).attr('name') == 'idDespachado[]' ) {
		    $('#'+id).attr('name','');
		} else {
		    $('#'+id).attr('name','idDespachado[]');
		}

		
	}
</script>
</head>
<body>
<form method="POST">
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th>Pedido Nº</th>
				<th>Direccion</th>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Despachado</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<?php
		$contador = $this->primer; 
		$total = 0;
		foreach ($this->pedidos as $p) { 
			if ($contador!=$p['id_pedido']) {
		?>
		<tr>
			<td class="borders" colspan='4'>
				<td class="borders">
					<b>Total</b>
				</td>
				<td class="borders">
					<b><?=$total?></b>
				</td>
				<td class="borders">
					<?php  
					if($despachadoFlag) { ?>
						<input type="checkbox" class="pedidoDespachado" checked disabled>
					<?php   }
					else { ?>
						<input type="checkbox" name= "" id = "" onclick = "despacharPedido(<?=$p['id_pedido'] -1?>)" class="pedidoDespachado" >
						<input type="hidden" name = "" id="<?=$p['id_pedido'] -1?>" value="<?=$p['id_pedido'] -1?>" />
					<?php } ?>
				</td>
				<td class="borders">
					<a href="listaPedidos.php?borrar=<?=$p['id_pedido']-1?>">
						<img src="/libreria/html/imagenes/tacho.png" width="22" height="22">
					</a>
				</td>
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
			<?php 
			if ($p['despachado'] == 1) {
				$despachadoFlag = true; 
			}
			else 
				$despachadoFlag = false;		
			?>
		</tr>
		<?php 
		$contador=$p['id_pedido']; } 
		if($this->cantidad >= 1){ ?>
		<tr>
			<td class="borders" colspan='4'>
				<td class="borders">
					<b>Total</b>
				</td>
				<td class="borders">
					<b><?=$total?></b>
				</td>
				<td class="borders">
					<?php  
					if($despachadoFlag) { ?>
						<input type="checkbox" class="pedidoDespachado" checked disabled>
					<?php   }
					else { ?>
						<input type="checkbox" name= "" id = "" onclick = "despacharPedido(<?=$p['id_pedido']?>)" class="pedidoDespachado" >
						<input type="hidden" name = "" id="<?=$p['id_pedido']?>" value="<?=$p['id_pedido']?>" />
					<?php } ?>
				</td>
				<td class="borders">
					<a href="listaPedidos.php?borrar=<?=$p['id_pedido']?>"><img src="/libreria/html/imagenes/tacho.png" width="22" height="22">
					</a>
				</td>
			</tr>
			<?php } ?>
		</table>

		<br>
		<div class="text-center">
			<a href="PaginaPrincipalEncargado.php" class="btn btn-secondary btn-lg ">Volver</a>
			<input type=submit class="btn btn-primary btn-lg active" value="Despachar Pedidos">
		</div>
	</div>
	</form>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	</html>