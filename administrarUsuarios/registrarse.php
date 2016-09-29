<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Informacion </title>
		<link rel="shortcut icon" href="imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
		<link href="../estilos/estilosregistrarse.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<?php
		include 'conexion.php';
		error_reporting(0);

		//cargar foto y guardarla
		if($_POST['guardar'])
		{
			$archivo = $_FILES["archivo"]["tmp_name"];
			$destino = "imagenes/".$_FILES["archivo"]["name"];
			move_uploaded_file($archivo,$destino);
		}

		$nombre = $_POST['usuario'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$contrasena = $_POST['password'];

		$registrar = $conexion -> query("INSERT INTO usuarios(id,nombre,apellido,correo,clave,avatar)VALUES(null,'$nombre','$apellido','$correo','$contrasena','$destino')");

		?>
		<div id="container">
		<img id="logo2" src="../imagenes/logoNetlabelEntrar.png">
			<form action="registrarse.php" method="post" name="contact_form" enctype="multipart/form-data">
				<ul>
					<li id="titulo"><h1>abre una cuenta </h1></li>
					<li><div id="lineaUno"></div></li>
					<li>
						<input id="entradaNombre" type="text" name="usuario" placeholder="nombre" required></input>
						<input id="entradaApellido" type="text" name="apellido" placeholder="apellido" required></input>
					</li>
					<li><div id="lineaDos"></div></li>
					<li>
						<input type="email" name="correo" placeholder="correo electrónico" required></input>
					</li>
					<li><div id="lineaTres"></div></li>
					<li>
						<input type="text" name="password" placeholder="password" required></input>
					</li>
					<li><div id="lineaCuatro"></div></li>
					<li>
						<label> Avatar </label>
						<input type="file" name="archivo"></input>
					</li>
					<li>
						<article>
			        		<input id="boton" type="submit" value="Guardar datos" name="guardar"></input>
			        	</article>
			        </li>
			        <li><div id="lineaCinco"></div></li>
				</ul>
				<img id="footerForm" src="../imagenes/footerFormulario.png">
				<h2> zutura </h2>
				<h4> 8bit circuit bending net label</h4>
			</form>
		</section>
		</div>
	</body>
</html>
