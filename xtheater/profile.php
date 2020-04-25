<?php
include('session.php');
if($tipo==2){header("location: profile2.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Página de Inicio</title>
</head>
<body>
	<table width="400" border="1">
  <thead>
    <tr>
      	<th><a href="VerObras.php">Ver obra</a></th>
      	<th><a href="Anadir.php">Añadir</a></th>
      	<th><a href="Cancelar.php">Cancelar</a></th>
		<th><a href="VerBoletos.php">Ver Boletos</a></th>
		<th><a href="RegistrarEmpleado.php">Registrar Empleado</a></th>
    </tr>
  </thead>
</table>
<h1>Bienvenido <?php printf($nombrea); ?>! </h1>

</body>
</html>