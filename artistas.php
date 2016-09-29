<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>  Artistas </title>
		<link rel="shortcut icon" href="imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
		<link href="estilos/estilosArtistas.css" type="text/css" rel="stylesheet"> </link> 
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<?php include 'includes/cabecera.php'; ?>
			<!-- FIN CABECERA -->
			<!-- CONTENIDO -->
			<section>
				<article id="artistaFoto">
					<h1 class="titulo"> NEUROFLIP </h1>
					<img id="fotografiaArtista" src="imagenes/artistas/5.png">
				</article>
				<article id="artistaInfo">
					<h2 class="infoArtista"> INFORMACION </h2>
					<p class="textoInfo"> Artista dede la ciudad de Barcelona que produce música usando Trackers desde los 90', especialmente con la commodore amiga y computadores de este estilo. El hace parte de la demoscene 303bcn, un grupo con el espiritu de hacer música electronica usando computadores retro, con un feeling e bajo voltaje desde la BCN.

					chiptune, Jungle & rock'n'roll.
					</p>
					<div id="separadorTexto"></div>
				</article>
				<article id="artistaRedes">
					<h3 class="linksArtista"> Links </h3>
					<article id="iconos">
						<addres>
							<a href=""><img class="contactoArtista" src="imagenes/redesArtistas/mundo.png"></a>
						</addres>
						<addres>
							<a href=""><img class="contactoArtista" src="imagenes/redesArtistas/soundcloud.png"></a>
						</addres>
						<addres>
							<a href=""><img class="contactoArtista" src="imagenes/redesArtistas/twitter.png"></a>
						</addres>
					</article>
				</article>
			</section>
			<!-- FIN CONTENIDO -->
			<!-- footer -->
			<?php include 'includes/footer.php'; ?>
			<!-- FIN FOOTER -->
		</div>
	</body>
</html>