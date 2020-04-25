<?php
include('session.php');
if($tipo==1){header("location: profile.php");}
$asiento=$_POST['asiento'];
?><!doctype html>
<html>
<head>
<title>Imprimir boleto</title>
	<?php
		$sql = "SELECT * FROM lugar where idlugar=".$asiento."";
		$Result=mysqli_query($con,$sql);
		$Registros=mysqli_num_rows($Result);
		while($row=$Result->fetch_array()) {
			$lugar=$row["asiento"];
			$idfuncion=$row["idfuncion"];
			$total=$row["precio"];
			$idlugar=$row["idlugar"];
		}
		$sql = "SELECT * FROM funcion where idfuncion=".$idfuncion."";
		$Result=mysqli_query($con,$sql);
		$Registros=mysqli_num_rows($Result);
		while($row=$Result->fetch_array()) {
			$idobra=$row["idobra"];
			$hora=$row["hora"];
			$fecha=$row["fecha"];
		}
		$sql = "SELECT * FROM obras where idobra=".$idobra."";
		$Result=mysqli_query($con,$sql);
		$Registros=mysqli_num_rows($Result);
		while($row=$Result->fetch_array()) {
			$nombre=$row["nombre"];
			$clasificacion=$row["clasificacion"];
		}
		
		$folio=rand(100000,999999);
		$sql="select folio from boleto";
		$ban=true;
		$result=mysqli_query($con,$sql);
		$numeroRegistros=mysqli_num_rows($result);
		if($numeroRegistros<=0){

		}else{
			while($ban){

				while($row=mysqli_fetch_array($result)) {
					if($folio==$row["folio"]){
					$folio=rand(10000,99999);
					$ban=true;
					}else{ $ban=false;}
				}

			}

		}
		
		
		
	?>
</head>
<body>
		<p><?php printf($folio);?></p>
		<p><?php printf($nombre);?></p>
		<p><?php printf($clasificacion);?></p>
		<p><?php printf($lugar);?></p>
		<p><?php printf($hora);?></p>
		<p><?php printf($fecha);?></p>
		<p><?php printf($nombrea." ".$ape);?></p>
		<p><?php printf($total);?></p>
	<form action="MensajePostVenta2.php" method="post">
		<input type="hidden" name="folio" value="<?php print($folio);?>">
		<input type="hidden" name="idobra" value="<?php print($idobra);?>">
		<input type="hidden" name="idfuncion" value="<?php print($idfuncion);?>">
		<input type="hidden" name="idlugar" value="<?php print($idlugar);?>"><br>
		<input type="hidden" name="idempleado" value="<?php print($idempleado);?>"><br>
		<input type="submit" value="CONFIRMAR Y CONTINUAR" ONCLICK="JAVASCRIPT:window.print()">
	</form>
	<br>
	<form action="profile2.php">
		<input type="submit" value="CANCELAR">
	</form>
</body>
</html>