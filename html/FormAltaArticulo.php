
<!DOCTYPE html>
<html>
<head>
	<title>Alta de Articulo</title>
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
		
		<form action="" method="POST">
		<h1>Alta Articulo</h1>
			<div>
				<label>Nombre:</label>
				<input type="text" name="nombre" id="n"/>
			</div>

			<div>
				<label>Tipo:</label>
				<select name="tipo" id="t">

					<?php
					foreach($this->tipo as $c) {
					?> 
					<option value="<?php echo $c['tipo'] ?>"><?php echo $c['descripcion'] ?></option>
					<?php } ?>
				</select> 

			</div>

			<div class="wrapper">
				<label>Precio:</label>
				<input type="number" min="1" name="precio" id="p"/>
			</div>


			<div class="wrapper">
				<label>Detalle:</label>
				<input type="text" name="detalle" id="d"/>
			</div>


			<div class="wrapper">
				<label>Cantidad:</label>
				<input type="number" min="0" name="stock" id="c"/>
			</div>

			<div class="buttons-wrapper">
				<div class="volver">
					<a href="ListaStock">Volver</a>
				</div>
            <input type=submit class="volver" value="Continuar">
			</div>
			
		</div>
		</form>
	</section>
	


</body>
</html>