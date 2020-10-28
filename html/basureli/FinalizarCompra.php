

<!-- /html/AgergarComidas.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Pasar a Finalizar la Compra</title>
</head>
<body>	

	<table>
		<?php $total = 0; ?>
		<tr><th>Menu</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th></tr>
			<?php foreach($this->menu as $e) { ?>
		<tr>
			<td><?= $e['nombre'] ?></a></td>
			<td><?= $e['precio'] ?></td>
			<td><?= $e['cantidad'] ?></td>
			<td><?= $e['precio']*$e['cantidad'] ?></td>
			<?php $total = $total + ($e['precio']*$e['cantidad'])	?>
		</tr>
			<?php  } ?>
		
		<tr>
			<td></td><td></td><th>Total</th><td><?= $total ?></td>
		</tr>		
	</table>

	<a href="CompraRealizada.php">Pagar en Domicilio</a>
	<br>
	<a href="">Pagar con Tarjeta de Credito</a>


</body>
</html>