<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Pedido</title>
	<link rel="stylesheet" href="html/styles/reset.css">
	<link rel="stylesheet" href="html/styles/altaArticulo.css">
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

	<section class="alta">
		<form method="POST">
			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input type="text" id="direccion" name="direccion" placeholder="Ingresar Direccion">
				<p>Ingrese la direccion de 3 a 50 caracteres</p>
			</div>

			<div class="buttons-wrapper">
         	   <input type=submit class="volver" value="Continuar">
			</div>

		</form>
	</section>

</body>
</html>