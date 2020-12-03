<!DOCTYPE html>
<html>
<head>
	<title>Lista de Sucursales</title>
	<link rel="stylesheet" href="html/styles/reset.css">
	<link rel="stylesheet" href="html/styles/listaSucursales.css">
</head>
<body>

	<header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipal">Librería Sarasa</a>
					<img src="html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="Sucursales">Sucursales</a>
					<a class="nav-link" href="InicioSesion">Ingreso para encargados</a>
				</div>
			</div>
	</header>

	<div class="content-wrapper">
		<section class="sucursales-wrapper">
			<?php foreach($this->sucursales as $s) { ?>
				<div class="sucursales">
					<img src="<?= $s['imagen'] ?>" alt="">
					<p><?= $s['nombre'] ?></p>
					<p><?= $s['direccion'] ?></p>
					<p><?= $s['telefono'] ?></p>
				</div>
				<?php }
			?>
		</section>


		<div class="volver">
			<a href="PaginaPrincipal">Volver</a>
		</div>
	</div>




</body>
</html>