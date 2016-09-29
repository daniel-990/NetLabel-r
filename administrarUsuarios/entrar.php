<?php  
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Informacion </title>
		<link rel="shortcut icon" href="../imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
		<link href="../estilos/estilosEntrar.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="container">
		<img id="logo2" src="../imagenes/logoNetlabelEntrar.png">
		<img id="fondo" src="../imagenes/4.png">
			<form name="login" action="validarIngreso.php" method="post" accept-charset="utf-8">
				<ul>
					<li id="titulo"><h1>entrar</h1></li>
					<li>
						<input type="text" name="user" placeholder="nombre"></input>
					</li>
					<li>
						<input type="text" name="password" placeholder="password"></input>
					</li>
					<li>
			        	<input id="boton" type="submit" value="Login"></input>
			        </li>
				</ul>
			</form>
		</section>
		</div>
	</body>
</html>