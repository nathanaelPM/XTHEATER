<?php
include('session.php');
if($tipo==2){header("location: profile2.php");}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Añadir</title>
</head>

<body>
	<table width="400" border="1">
  <thead>
    <tr>
		<th><a href="Anadir.php">Añadir</a></th>
      	<th><a href="VerObras.php">Ver obra</a></th>
      	<th><a href="Cancelar.php">Cancelar</a></th>
		<th><a href="VerBoletos.php">Ver Boletos</a></th>
		<th><a href="RegistrarEmpleado.php">Registrar Empleado</a></th>
    </tr>
  </thead>
</table>
	<table width="400" border="1">
  <thead>
    <tr>
      	<th><a href="AnadirObra.php">Añadir Obra</a></th>
		<th><a href="Anadir.php">Añadir Funcion</a></th>
    </tr>
  </thead>
</table>
</body>
</html>