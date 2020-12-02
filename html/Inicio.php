<!DOCTYPE html>
<html>
<head>
  <title>Ingreso de Encargados</title>
  <link rel="stylesheet" href="../html/styles/reset.css">
  <link rel="stylesheet" href="../html/styles/inicio.css">
</head>
  <body>

  <header class="header-section">
			<div class="header-navbar">
				<div class="header-title">
					<a class="title" href="PaginaPrincipal.php">Librería Sarasa</a>
					<!-- <h1>Librería Sarasa</h1> -->
					<img src="../html/Imagenes/art-libreria.png" class="img-title" alt="img-title" >
				</div>

				<div class="header-options">
					<a class="nav-link" href="sucursales.php">Sucursales</a>
					<a class="nav-link" href="iniciosesion.php">Ingreso para encargados</a>
				</div>
			</div>
	</header>

      <section class="login">
        <form action="" method="POST">
          <div class="mail">
            <label>Ingrese mail:</label>
            <input type="text" name="mail" >
          </div>
          
          <div class="pass">
            <label> Ingrese contraseña:</label>
            <input type="text" name="contrasena" >
          </div>

          <div class="buttons-wrapper">
            <div class="volver">
              <a href="PaginaPrincipal.php">Volver</a>
            </div>
            
            <input class="volver" type="submit" value="Aceptar" name="a">
          </div>

        </form>
      </section>

  </body>
</html>

