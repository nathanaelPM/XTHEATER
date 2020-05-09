<?php
include('session.php');
if($tipo==2){header("location: profile2.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Página de Inicio</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
<link rel="stylesheet" href="Estilo/estilo.css" />

</head>
<body>

      <div id="header">
        <div class="logo">
          <img src="Estilo/logo/logoX.jpg" width="300" alt="">
       </div>

</div>
<div align='center'>
 <table width="900" border="1"></br>
 
  <thead>
    <tr>
	
      	<th><a href="VerObras.php">VER OBRAS</a></th>
      	<th><a href="Anadir.php">AÑADIR</a></th>
      	<th><a href="Cancelar.php">CANCELAR</a></th>
		<th><a href="VerBoletos.php">VER BOLETOS</a></th>
		<th><a href="RegistrarEmpleado.php">REGISTRAR EMPLEADO</a></th>
</div>		
    </tr>
  </thead>
</table>
<h1>Bienvenido <?php printf($nombrea); ?>! </h1>

</body>
</html>