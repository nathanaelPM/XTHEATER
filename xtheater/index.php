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
<link rel="styleshett" type="text/css" href="estilo.css" />

</head>
<body>
<!--header start here-->
<div id="header">
</div>
<h1>Formulario </h1>
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