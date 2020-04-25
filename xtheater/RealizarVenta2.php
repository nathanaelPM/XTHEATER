<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
?><!doctype html>
<html>
<head>
<title>Realizar venta</title>
</head>
<body>
	<table width="400" border="1">
  <thead>
    <tr>
		<th><a href="RealizarVenta2.php">Realizar venta</a></th>
    	<th><a href="VerCartelera2.php">Ver Cartelera</a></th>
		<th><a href="BuscarObra2.php">Buscar obra</a></th>
    </tr>
  </thead>
</table>
<?php
	$sql = "SELECT funcion.idfuncion, obras.nombre, funcion.hora, funcion.fecha FROM `funcion`,`obras` WHERE funcion.idobra=obras.idobra";
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
				<th><strong> Precio  /  Asiento </strong></th>
				</tr></thead><tbody><?php
			while($row=$Result->fetch_array()) {	    
			   ?>
			   <tr>
				   <td> <?php printf($row["nombre"]); ?>   </td>
				   <td> <?php printf($row["hora"]); ?> </td>
				   <td> <?php printf($row["fecha"]); ?> </td>
				   <td>
					   <?php
						   $sql2 = "SELECT * FROM lugar WHERE idfuncion=".$row["idfuncion"]." and disponible='SI';";
							$Result2=mysqli_query($con,$sql2);
							$Registros2=mysqli_num_rows($Result2);
						?>
					   <select name="asiento" form="enviar<?php printf($row["idfuncion"]);?>">
						   <?php
							while($row2=$Result2->fetch_array()) {	    
							   ?>
					   		<option value="<?php printf($row2["idlugar"]); ?>">$<?php printf($row2["precio"]); ?>.00       -      <?php printf($row2["asiento"]); ?></option>
						   <?php
							}?>
					   </select></td>
				   <td>
					   <form action="ImprimirBoleto2.php" id="enviar<?php printf($row["idfuncion"]);?>" method="post">
					   <input type="submit" value="Confirmar">
					   </form></td>
			   </tr>
			<?php }}?>
	</tbody></table>

</body>
</html>