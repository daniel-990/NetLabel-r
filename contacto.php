<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>  Contacto </title>
		<link rel="shortcut icon" href="imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
  	<!--	<link rel="stylesheet" type="text/css" href="css/animate.css"/> -->
		<link href="estilos/estilosContacto.css" type="text/css" rel="stylesheet"> </link>
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<?php include 'includes/cabecera.php'; ?>
			<!-- FIN CABECERA -->
			<!-- CONTENIDO -->
			<section>
				<form action="envioMensaje.php" method="post" enctype="multipart/form-data">
					<h1 id="tituloForm"> Escribenos </h1>
					<ul class="campoForm">
						<div id="linea1"></div>
						<input id="campoDatos1" type="text" name="nombre" placeholder="nombre" required>
					</ul>
					<ul class="campoForm">
						<div id="linea2"></div>
						<input id="campoDatos2" type="email" name="correo" placeholder="emmy@gmail.com" required>
					</ul>
					<ul class="campoForm">
						<div id="linea3"></div>
						<textarea id="campoDatos3" type="text" name="comentario" placeholder="mensaje" col="40" rows="6" required></textarea>
					</ul>
					<ul id="ultimoCampo">
						<div id="linea4"></div>
						<input id="envio" type="submit" value="Enviar" name="guardar"/>
						<input type="hidden" value="john" name="edo"/>
						<div id="linea5"></div>
				</form>
			</section>
			<!-- FIN CONTENIDO -->
			<!-- footer -->
			<?php include 'includes/footer.php'; ?>
			<!-- FIN FOOTER -->
		</div>
	</body>
</html>
