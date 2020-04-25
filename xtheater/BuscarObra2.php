<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
?><!doctype html>
<html>
<head>
<title>Buscar Obra</title>
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
	<form action="BuscarObra2.1.php" method="post">
		<input type="text" name="nombre">
		<input type="submit">
	</form>
<?php
	//include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
//	include("config/conexion.php");//Contiene de conexion a la base de datos
	$sql = "SELECT * FROM obras;";
	$Result=mysqli_query($con,$sql);
	$Registros=mysqli_num_rows($Result);
	
	   
			   if($Registros<=0) 
				   { 
					 echo "<div align='center'>"; 
					 echo "<h2>No se encontraron resultados</h2>"; 
					 echo "</div>"; 
			   		}else{?>
				   <table border=1>
			<thead><tr>
			<th width="600"><strong> Obra </strong></th>
			<th><strong> Clasificacion </strong></th>
				</tr></thead><tbody><?php
			while($row=$Result->fetch_array()) {	    
			   ?>
			   <tr>
				   <td> <?php printf($row["nombre"]); ?>   </td>
				   <td> <?php printf($row["clasificacion"]); ?> </td>
			   </tr>
			<?php }}?>
	</tbody></table>

</body>
</html>