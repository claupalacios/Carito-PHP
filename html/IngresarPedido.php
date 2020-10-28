

<!-- /html/IngresarPedido.php  -->

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

	<script type="text/javascript">
		
			function Desahabilitar() {
				var tarjeta = document.getElementById("Tarjeta");
				tarjeta.style.display = "none";
			}	
			function Habilitar() {
				var tarjeta = document.getElementById("Tarjeta");
				tarjeta.style.display = "block";
			}
			function Alerta(){
				var alerta = document.getElementById("alerta");
				var direccion = document.getElementById("direccion");

				if (direccion.length<4) {
					alerta.style.display = "block";
				}
			}			
		
	</script>
</head>
<body>

	<form>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <br>
    <input type="text" id="direccion" name="direccion" placeholder="Ingresar Direccion">
    <div id="alerta" class="alerta">Ingrese la direccion de 3 a 50 caracteres</div>
  </div>
  <div class="form-group form-check">
    <input type="radio" name="metodo" class="form-check-input" id="pdomicilio" onclick="Desahabilitar()">
    <label class="form-check-label" for="pdomicilio">Pagar en Domicilio</label>
    <br>
    <input type="radio" name="metodo" class="form-check-input" id="ptarjeta" onclick="Habilitar()">
    <label class="form-check-label" for="ptarjeta">Pagar con Tarjeta</label>
  </div>
  <br>
		<div class="form-group" id="Tarjeta">
			<label for="Tarjeta" >Numero de Tarjeta </label>
			<br>
			<input type="text">
			<br>
			<label>Nombre Titular</label>
			<br>
			<input type="text">
			<br>
			<label>Fecha Vencimiento</label>
			<br>
			<input type="text">
			<br>
			<label>Codigo de Seguridad</label>
			<br>
			<input type="text">
			<br>
		</div>

  <input type="submit" class="btn btn-primary" value="Continuar">
</form>


<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>