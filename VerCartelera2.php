<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
?><!doctype html>
<html>
<head>
<title>Ver cartelera</title>
</head>
<body>
	<table width="400" border="1">
  <thead>
    <tr>
    	<th><a href="VerCartelera2.php">Ver Cartelera</a></th>
		<th><a href="BuscarObra2.php">Buscar obra</a></th>
	    <th><a href="RealizarVenta2.php">Realizar venta</a></th>
    </tr>
  </thead>
</table>
<?php
	$sql = "SELECT obras.nombre, funcion.hora, funcion.fecha FROM `funcion`,`obras` WHERE funcion.idobra=obras.idobra";
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
			<th width="300"><strong> Obra </strong></th>
			<th><strong> Hora </strong></th>
				<th><strong> Fecha </strong></th>
				</tr></thead><tbody><?php
			while($row=$Result->fetch_array()) {	    
			   ?>
			   <tr>
				   <td> <?php printf($row["nombre"]); ?>   </td>
				   <td> <?php printf($row["hora"]); ?> </td>
				   <td> <?php printf($row["fecha"]); ?> </td>
			   </tr>
			<?php }}?>
	</tbody></table>

</body>
</html>