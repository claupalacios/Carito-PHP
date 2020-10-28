<!DOCTYPE html>
<html>
<head>
	<title>
		Lista de Stock
	</title>
</head>
<body>

	<style type="text/css"> 
a:link 
{ 
text-decoration:none;
color: black; 
} 
a:visited{color: black}

</style>
<div class="btn-group" role="group" aria-label="..." style="text-align:center; margin: 0 auto; padding-top: 150px; ">

  <button type="button" class="btn btn-default">PEDIDOS</button>
  <button type="button" class="btn btn-default">MESAS</button>
  <button type="button" class="btn btn-default">VENTAS</button>
  <button type="button" class="btn btn-default">EMPLEADOS</button>
  <button type="button" class="btn btn-default">ASISTENCIA</button>
  <button type="button" class="btn btn-default">STOCK</button>
  <button type="button" class="btn btn-default">MENU</button>
</div>
	<br><br><br>
	<a href="crearstock.php">Agregar nuevo </a>
	<br>
	<table border=1>

		<tr><th></th><th></th><th>Nombre</th><th>Cantidad</th></tr>

		<?php foreach($this->stock as $e) { ?>
		<tr><td width="40"  align="center"><a href="modificarempleado.php?id=<?=$e['id_empleado']?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPbSURBVGhD7dlHiBRNGMbxNWPO8WBWEMWcMKEiBjwoiicPehDBo1dRUC8ezVlvejOAehBExZxzAEHMophzOBj+z64FLy/dsz3L1M4O+MCPb/2mlq5nHLuraspqYMZiCZZiPGqhpNIIB/DHOY42KImoxDH4EsFttEWNzy4kFbBKokxfvEJSAUtl2qFGZRT6VPxYnn4ouTIT8BkvYMv0R8mUmYqvCJMq2TL74CflywzAa/hx3mU0QFFSH4fgJ+XLDMQb+HHeQlRb9A7PqPixPIUsswfVEk1GH5OfmK3/8S9ZywzCW/hxwWFEjyZh31GVmYKQrGUG4x38OFmBqNHF/Tt5BS1hk1bmJSor8wEdES1D4S+qO4wtoQIhWcsMwXvotR+YiGgZDr1TdkIq0QIhvXEfWT5mvozeJD1nppf/KVJGwpe4BFuiF55Br31DVco0+fffKNHaKZ8SQVXLRMlofIS9sEo0R4hKPIUdE1xFbYSklTmDaBmDT7AXvAhboifSStxFB/j4MteRNK4g0f5aq1g7sQuoagntz4dV/FieUOYk7Ee0oBmHL7AT8yV6IFeJ9ghRiZ1IWgFoKxwlOt2wS3E5j6wl7sCX2IHwui8TJXoI+RLn4Es8gR0TVFYiuIG6iJJJqKxEd+QqYTdDKrENflzaDaAgmQxf4iyylvA7urQS/m+soNEDSw8ue0Hd022JbngMOyZIKrEVlY0raLTH/g57wXxK3II9j1KJLfDjbiLaudU0aJVpL3gazRCiEo9gxwR+cmklriFaCa0udRu0F/QluiKfEpvhx2l50hpRMgtJJZoiJFcJ3Tp9iU3w47TRaoUo0bnSL9gLnoIv8RB2TKA1UZYSfqNV8KyCvaAv0QX5lNgIP84v76NEn+1wQS0I8ylhv8dQiQ3w4/x6LEo6w150P0JU4gHs64HuOr7EevhxfhUQLYtgL7wASj1oOe3/7UhSiXXw4/yzJ2rsRuY3OsFGE5mDMEYl7K0zrYS/bUeNNvT2Ca5bY1LqQLdmf/9XibWwBcTfLKJnJuwEViIt+qrMl1gD+/uinV3UE4+kbIedxAikRX8rIWklTqAxqjWazHOESeio055qpEW/txq2gOgr5Wjb01zRuaqdyG7kih56c3EQ9vfkKIpSQlkGOxkdoulYM0TvvMpqnDZTSbdhOYKilVB0cOAnpTLzof20jvn9656WHQ1RtGhHlvYOZ3EPWp9FPd7PknlImmAaPUP0EVoMHb7VmOgfdtKELX20dHims6ZqfbjlE32Z6Ceu5Yk+88uhI8wst+KiRxPVly768mQvtFCMdqb0PzlTVvYXWUqWdd8j3DAAAAAASUVORK5CYII=" width="22" height="22"></a></td>
		<td width="40" align="center"><a href="borrarempleado.php?id=<?=$e['id_empleado']?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHcSURBVGhD7Zo9SgRBFIQnMjUwNfIGnkAzMdEbaGYmxoJgqGBgqHgAwRsIBgYighgbi2BsoqE/VbANzePZM6P12g36gy/p7ZnqgmV33rJdo9Gozi586JF7ppp9+DVQ7q3CMbwa4S30DlyS13j3+kmeaTQ30Av/T3mm0bQigf6qyBrcmjJ5pkZjGtmE3nu2hsyW8Qi9T5EaMlvGJfRCashsGWfQC6khs2XsQS8k9xXmz0XX0O7hWr6H19g9VmbL2IBeSK791p2Fdg/XcoY8PTBbxjL0QnKjijBbxgL0QnKjijBbxgz8gF5QMqIIM5kt5QV6YcmIIsyUcwe9sGREEWbKuYBeWDKiCDPlHEEvLBlRhJlytqEXlowowkw569ALS0YUYaacReiFJSOKMFPOHPTCkhFFmBnCG/QCqboIs8IoDVjqItKBylIasNRFpAOVpTRgqYtIBypLacBSF5EOVJbSgKUuIh2oLKUByz7gDSlSehCVDlSW0oD1Dudhoq8I9/IauycpHagsfQPWE+R7mz+s7UzWcrnG17jnebLmGTJQWfoGLIUhA5Wlb8BSGDJQWU6hF670BIYz5Kehv/gJl2AVDqF3CIUHsCqr8BzeQ+9PAWPkPXivFdhoNOR03Tf9i2u6uYQhZQAAAABJRU5ErkJggg==" width="22" height="22"></a></td>
		<td><?= $e['nombre'] ?></td>
		<td><?= $e['cantidad'] ?></td>
			

			
		</tr>
		<?php } ?>

</body>
</html>