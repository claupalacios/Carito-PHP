
<!-- /html/ContinuarAgregando.php  -->

<!DOCTYPE html>
<html>
<head>
	<title>Continuar Agregando</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Puli's Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php foreach($this->menu as $e) { ?>	
					<a class="dropdown-item" href="comidasAgregadas.php?comidas=<?=$e['tipo']?>"><?= $e['descripcion'] ?></a>				
		  <?php } ?>
        </div>
    </ul>
  </div>
</nav>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html>
<head>
	<title>Continuar Agregando</title>
</head>
<body>

	<ul>
		<li>Menu
			<ul>
				<?php foreach($this->menu as $e) { ?>
				<li>
					<a href="comidasAgregadas.php?comidas=<?=$e['tipo']?>"><?= $e['descripcion'] ?></a>
				</li>
				<?php } ?>
			</ul>
		</li>
	</ul>

</body>
</html>-->