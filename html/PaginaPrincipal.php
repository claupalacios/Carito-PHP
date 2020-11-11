<?php

//html/PaginaPrincipal.php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Librería Zarasa</title>
	<link rel="stylesheet" type="text/css" href="../controllers/css/bootstrap.min.css">
  <link rel="stylesheet" href="../controllers/css/bootstrap.css">
  <link rel="stylesheet" href="../controllers/css/bootstrap.css">

  <script rel="stylesheet" type="text/css" src="../controllers/js/jquery-3-3.1.slim.min.js"></script>
  <script  rel="stylesheet" type="text/css" src="../controllers/js/bootstrap.js"></script>

  <style type="text/css">
    body {
      margin: 50px;
    }
  </style>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Librería Zarasa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comprar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          foreach($this->categorias as $c) {
           ?>
					<a class="dropdown-item" href="categorias.php?categorias=<?=$c['tipo']?>"><?= $c['descripcion'] ?></a>				
		  <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sucursales.php">Sucursales</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="iniciosesion.php">Ingreso para encargados</a>
      </li>
    </ul>
  </div>
</nav>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

