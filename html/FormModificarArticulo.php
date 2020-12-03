<!DOCTYPE html>
<html>
<head>
	<title>Modificacion de Articulos</title>
	<link rel="stylesheet" type="text/css" href="html/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="html/styles/listaPedidos.css">
</head>
<body>

	<header class="header-section">
		<div class="header-navbar">
			<div class="header-title">
				<a class="title" href="PaginaPrincipalEncargado">Librería Sarasa</a>
				<img src="html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
			</div>

			<div class="header-options">
					<a class="nav-link" href="ListaStock">Productos</a>
					<a class="nav-link" href="ListaPedidos">Despachar Pedidos</a>
					<a class="nav-link" href="Logout">Cerrar Sesión</a>
			</div>
		</div>
	</header>

	<h1>Modificación de Artículos</h1>

	<form name="" method="POST">
	<table class="table">
		<thead class="thead-light">
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Detalle</th>
				<th>Cantidad</th>
			</tr>		
			<tr>
				<td><input type="text" name="nombre"  id="n" value="<?= $this->articulo['nombre']?>"/></td>
				<td><input type="number" name="precio" min="1" id="p" value="<?= $this->articulo['precio']?>"/></td>
				<td><input type="text" name="detalle" id="d" value="<?= $this->articulo['detalle']?>"/></td>
				<td><input type="number" name="stock" min="0" id="s" value="<?= $this->articulo['stock']?>"/></td>
			
			</tr>
			<br><br>
		</div>
	</table>
			<br><br>
	

	<div class="buttons-wrapper">
		<a href="ListaStock" class="volver">Volver</a>
		<input type=submit class="volver" value="Continuar">
	</div>

		</form>

		
	


</body>
</html>