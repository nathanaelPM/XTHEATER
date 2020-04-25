<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
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
      <th><a href="BuscarObra2.php">Buscar obra</a></th>
      <th><a href="VerCartelera2.php">Ver Cartelera</a></th>
      <th><a href="RealizarVenta2.php">Realizar venta</a></th>
    </tr>
  </thead>
</table>
<h1>Bienvenido, recuerda ser amable con el cliente, buen dia <?php printf($nombrea); ?>! </h1>

</body>
</html>