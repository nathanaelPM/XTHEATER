<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mensaje Post Venta</title>
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
		$folio=$_POST["folio"];
		$funcion=$_POST["idfuncion"];
		$idobra=$_POST["idobra"];
		$idlugar=$_POST["idlugar"];
		$idvendedor=$_POST["idempleado"];
	$mysql = new mysqli("localhost", "root", "", "xtheater");
	$Query= "INSERT INTO boleto (folio,funcion,idobra,idlugar,idvendedor) VALUES (".$folio.",".$funcion.",".$idobra.",".$idlugar.",".$idvendedor.");";
	$Result = $mysql->query( $Query );
	if($Result!=null){
		$Query= "UPDATE lugar SET disponible='NO' WHERE idlugar=".$idlugar.";";
		$Result = $mysql->query( $Query );
	?>
		<h1>Listo, Recuerda entregar cuidadosamente el cambio y ser amable! :)</h1>
	<?php
	}
	else{
		print("ERROR");
	}
	?>
</body>
</html>