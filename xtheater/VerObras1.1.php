<?php
include('session.php');
if($tipo==2){header("location: profile2.php");}
?><!doctype html>
<html>
<head>
<title>Buscar Obra</title>

<link rel="stylesheet" href="Estilo/estilo.css" />

</head>
<body>

<div id="header">
        <div class="logo">
            <img src="Estilo/logo/logoX.jpg" width="300" alt="">
    </div>
	<div align='center'>  
	<table width="900" border="1"> </br>
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
	<table  border="1">
  <thead>
    <tr>
      	<th><a href="VerFunciones.php">Ver Funciones</a></th>
    </tr>
  </thead>
</table>
	<form action="VerObras1.1.php" method="post"> </br>
	<input type="text" placeholder="Nombre de la obra" name="nombre">
		<input name="submit"  type="submit" value="Buscar"> 
	</form></br>
<?php
	$nombre=$_POST['nombre'];
	//include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
//	include("config/conexion.php");//Contiene de conexion a la base de datos
	$sql = "SELECT * FROM obras WHERE nombre LIKE '%".$nombre."%';";
	$Result=mysqli_query($con,$sql);
	$Registros=mysqli_num_rows($Result);	
			   if($Registros<=0) 
				   { 
					 echo "<div align='center'>"; 
					 echo "<h2>No se encontraron resultados</h2>"; 
					 echo "</div>"; 
			   		}else{
				   ?>
		   <table border=1>
			<thead><tr>
			<th width="600"><strong> Obra </strong></th>
			<th><strong> Clasificacion </strong></th>
				</tr></thead><tbody>
			<?php
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