<?php
include('session.php');
if($tipo==2){header("location: profile2.php");}
?><!doctype html>
<html>
<head>
<title>Ver cartelera</title>
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
	<table border="1">
  <thead>
    <tr>
      	<th><a href="VerFunciones.php">Ver Funciones</a></th>
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