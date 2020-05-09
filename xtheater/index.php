<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user_sys'])){
	$_SESSION['login_user_sys']=$username;
	$sql = "select tipo from usuarios WHERE email = '" . $username . "';";
		$Result=mysqli_query($con,$sql);
		while($row=$Result->fetch_array()) {	    
           $tipo=$row["tipo"];
		}
		if($tipo==1){
			header("location: profile.php"); // Redireccionando a la pagina profile.php
		}
		if($tipo==2){
			header("location: profile2.php"); // Redireccionando a la pagina profile.php
		}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>XTHEATER</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
<link rel="stylesheet" href="Estilo/estilo.css" />

</head>
<body>
<!--header start here-->
<div id="header">
</div>

<img src="logo/logoX.jpg" alt="">
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>Iniciar sesión</h3>
			<form action="#" method="post">
				<input type="text" placeholder="Correo electrónico" required="" name="username" required>
				<input type="password" placeholder="Contraseña" name="password" required>
				<input name="submit" type="submit" value="Ingresar">
			</form>
			<div class="clear"> </div>
				<span><?php echo $error; ?></span>
			</div>
		</div>
	</div>
</div>
</body>
</html>