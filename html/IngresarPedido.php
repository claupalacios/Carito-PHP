<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Pedido</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			margin: 50px;
		}
	</style>
</head>
<body>

	<form>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <br>
    <input type="text" id="direccion" name="direccion" placeholder="Ingresar Direccion">
    <div id="alerta" class="alerta">Ingrese la direccion de 3 a 50 caracteres</div>
  </div>

  <input type="submit" class="btn btn-primary" value="Continuar">
</form>


<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>