<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Musica </title>
		<link rel="shortcut icon" href="imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
		<link href="estilos/estilosMusica.css" type="text/css" rel="stylesheet"> </link>
	</head>
	<body>
		<div id="container">
			<!-- CABECERA -->
			<?php include 'includes/cabecera.php'; ?>
			<!-- FIN CABECERA -->
			<!-- CONTENIDO -->
			<section>
				<article class="contenedorImagenes">
					<div id="disco1">
						<article id="infoDisco1">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/1.png">
					</div>
					<div id="disco2">
						<article id="infoDisco2">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/2.png">
					</div>
					<div id="disco3">
						<article id="infoDisco3">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/3.png">
					</div>
				</article>
				<article class="contenedorImagenes">
					<div id="disco4">
						<article id="infoDisco4">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/4.png">
					</div>
					<div id="disco5">
						<article id="infoDisco5">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/5.png">
					</div>
					<div id="disco6">
						<article id="infoDisco6">
							<h1 class="tituloDisco"> Noise of Rebellion </h1>
							<p class="descripcionDisco">
							Trabajo elaborado usando una consola gameboy
							con modificaciones Prosound. En este trabajo se explora
							el canal noise de LSDJ para interpretar sonidos noise con timbres
							muy interesantes.
							</p>
							<a class="linkArtista" href="#"> saber mas del músico </a>
						</article>
						<img class="portadasMusicales" src="imagenes/artistas/6.png">
					</div>
				</article>
				<article id="formulario">
					<form method="get" id="formCancion" action="musica.php">
						<h1> Esucha musica de nuestros artistas </h1>
						<select id="artista" name="artista">
							<option value="kaziuz"> kaziuz </option>
							<option value="chipprogrammer"> chipprogrammer </option>
							<option value="abracadaver"> abracadaver </option>
						<select>
						<input type="submit" value="Buscar"></input>
					</form>
					<section id="paginaResultado">
						<?php
							$artistas = array("kaziuz","chipprogrammer","abracadaver");
							if(isset($_GET['artista']) && !empty($_GET['artista']) )
							{

								#creamos variables
								@$targetArtist=$_GET['artista'];

								#Seleccionamos artista 1
								if($targetArtist == $artistas[0])
								{
									echo "
									<h1> Kaziuz</h1>
									<h2> Track: vockustz </h2>
									<p> Track grabado con pream de valvulas + lsdj versioin 1.2 </p>
									<p> año 2012 </p>
									<audio controls>
										<source src='audio/1.mp3' type='audio/mp3'>
										Your browser does not support the audio element.
									</audio>
											";
								}

								#Seleccionamos artista 2
								else if($targetArtist == $artistas[1])
								{
									echo "
									<h1> Chipprogrammer</h1>
									<h2> Track: gults hiillsa </h2>
									<p> Track desde lo mas remoto de los circuitos internos de la gameboy.
									usando una Gameboy color green </p>
									<p> año 2010 </p>
									<audio controls>
										<source src='audio/2.mp3' type='audio/mp3'>
										Your browser does not support the audio element.
									</audio>
											";
								}

								#Seleccionamos artista 3
								else if($targetArtist == $artistas[2])
								{
									echo "
									<h1> abracadaver </h1>
									<h2> Track: my plague </h2>
									<p> track con un sin fin de propiedades ritmicas aptas para el baile </p>
									<p> año 2012 </p>
									<audio controls>
										<source src='audio/3.mp3' type='audio/mp3'>
										Your browser does not support the audio element.
									</audio>
											";
								}

							}
						?>
					</section>
				</article>
			</section>
			<!-- FIN CONTENIDO -->
			<!-- footer -->
			<?php include 'includes/footer.php'; ?>
			<!-- FIN FOOTER -->
		</div>
	</body>
</html>
