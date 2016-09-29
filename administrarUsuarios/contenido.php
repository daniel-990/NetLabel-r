<?php
	session_start();
	include 'conexion.php';

	//cambiamos el color
	if(isset($_POST['color'])) #esta variable es tomada del name del select
	{
		$color = $_POST['color'];
		setcookie('color', $color, time() + 360000);
	}
	else
	{
		if(isset($_COOKIE['color']))
		{
			$color = $_COOKIE['color'];
		}
		else
		{
			$color = 'black';
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> ZUTURA NET-LABEL </title>
		<link rel="shortcut icon" href="../imagenes/favicon.png">
		<script language="javascript" type="text/javascript" src="libraries/jquery-2.2.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="../estilos/estilosContenido.css">
		<style>
			@font-face{
			    font-family: todo;
			    src: url(../tipografias/AldotheApache.ttf);
			}

			@font-face{
			    font-family: texto;
			    src: url(../tipografias/SourceCodePro-Medium.otf);
			}

			@font-face{
			    font-family: negrita;
			    src: url(../tipografias/SourceCodePro-Black.otf);
			}

			*{
				margin: 0 auto;
			}

			body{
				background-color: black;
				/*background: url(../imagenes/background4.jpg) no-repeat center center fixed;*/
				/*background-size: cover;*/

			}

			#container{
				width: 1024px;
				height: 1200px;
				background-color: rgba(0, 0, 0, 0.2);
			}




			/* -------- ESTILOS FOOTER ---------- */
					footer{
						width: 1023px;
						height: 56px;
						position: fixed;
						z-index: 2;
						background-image: url(../imagenes/footer.png);
						top: 724px;
						right: 201px;
					}

					.seccionesFooter{
						width: 338.3px;
						height: 27.009px;
						display: inline-block;
					}

					h4{
						font-size: 22px;
						font-family: todo;
						position: absolute;
						right: 918px;
						top: 8px;
					}

					h5{
						width: 220px;
						font-size: 15px;
						font-family: todo;
						position: absolute;
						right: 755px;
						top: 32px;
						letter-spacing: 0.5px;
					}

					h6{
						width: 293px;
						font-size: 29px;
						font-family: todo;
						position: absolute;
						right: 329px;
						top: 8px;
					}

					.seccionesFooter ol{
						width: 298px;
						height: 27.009px;
					}

					#registrarse{
						width: 144.889px;
						height: 33.491px;
						background-color: black;
						position: relative;
						top: -21px;
					}

					#registrarse a{
						text-align: center;
						color: white;
						font-family: todo;
						font-size: 23px;
						position: relative;
						right: -17px;
						top: 6px;
						text-decoration: none;
					}

					#registrarse a:hover{
						text-align: center;
						color:rgb(60, 244, 34);
						font-size: 24px;
						text-decoration: inherit;
					}

					#entrar{
						width: 103.111px;
						height: 33.491px;
						background-color: black;
						position: relative;
						top: -21px;
					}

					#entrar a{
						text-align: center;
						color: white;
						font-family: todo;
						font-size: 23px;
						position: relative;
						right: -17px;
						top: 6px;
						text-decoration: none;
					}

					#entrar a:hover{
						text-align: center;
						color:rgb(255, 244, 34);
						font-size: 24px;
						text-decoration: inherit;
					}
				/* -------- ESTILOS FOOTER ---------- */
					#usuarioLogeado{
						width: 50px;
						height: 50px;
						border-radius: 25px;
						margin-top: -15px;
						margin-left: -26px;
						border: 1px solid rgb(33, 124, 244);
					}

					#selectorColor{
						width: 184px;
						height: 29px;
						background-color: transparent;;
						position: absolute;
						top: 8px;
						right: 323px;
						text-align: center;
						font-family: texto;
						font-size: 1px;
						color: black;
					}

					#chao{
						color: black;
						font-family: todo;
						font-size: 15px;
						position: relative;
						right: 2px;
						top: -2px;
						text-decoration: none;
					}

					#chao:hover{
						color:white;
						background-color: black;
					}

					#medejas{
						color: black;
						font-family: todo;
						font-size: 15px;
						position: relative;
						right: 2px;
						top: -2px;
						text-decoration: none;
					}
		</style>
	</head>
	<body <?php echo "style='background:$color'" ?> >
		<div id="container">
		<!-- CABECERA -->
		<header>
			<img id="logo" src="../imagenes/logoNetlabel.png" width="228.166px" height="85.461px">
					<ul class="redes">
						<li>
							<a href="https://www.twitter.com/">
								<img class="logosRedes" src="../imagenes/redesNetlabel/twitter.png"/>
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/">
								<img class="logosRedes" src="../imagenes/redesNetlabel/facebook.png"/>
							</a>
						</li>
						<li>
							<a href="https://www.gmail.com/">
								<img class="logosRedes" src="../imagenes/redesNetlabel/gmail.png"/>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/">
								<img class="logosRedes" src="../imagenes/redesNetlabel/instagram.png"/>
							</a>
						</li>
					</ul>
					<nav>
						<ul>
							<li class="menu">
								<a href="../index.php">Netlabel</a>
							</li>
							<li class="menu">
								<a href="musica.php">musica</a>
							</li>
							<li id="menu1">
								<a href="artistas.php">Artistas</a>
								<ul id="submenuArtistas">
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
									<li class="listaArtistas"><a href=""> artista  </a></li>
								</ul>
							</li>
							<li class="menu">
								<a href="contacto.php">Contacto</a>
							</li>
						</ul>
					</nav>
					<div id="triangulo"></div>
				</header>

		<!-- FIN CABECERA -->
			<h1> CONTENIDO </h1>
				<section>
				<h1> ZUTURA </h1>
				<p> Zutura es un Net Label independiente ubicado en Medellin(Colombia), trabajamos desde 2010. Nuestro trabajo abarca descargas y contenido relacionado con música 8bit, Circuit Bending y la cultura electronica DIY, todos nuestros trabajos bajos licencias creative commons y descargas gratuitas.
				<br></br>
				La música producida mediante corto circuitos y 8bit nos son géneros musicales como tal, sin embargo; pueden contenedores de nuevos y pasados estilos, que tienen el valor de hacer uso de la tecnologia vieja y obsoleta como herramienta en comun. Nuestra familia de zuturados crece todos los dias.
				<br></br>
				Zutura inicialmente es creado por: BLIKA, PROGRAMMERCHIP.
				</p>
				<div id="separador1">
				<h2> envianos tu demo </h2>
				<p> En Zutura estamos abiertos y dispuestos a recibir y publicar su material. Nos puede enviar su demo en zutura@gmail.com.
				<br></br>
				Con el fin de hacer una escucha vista previa rápida, usted debe enviar un enlace privado a su materia (La página web, Soundcloud, Vimeo, etc) o un enlace de descarga.
				<br></br>
				 Su material debe ser inédito y siempre relacionado con el mundo del sonido de 8 bits y / o circuit bending. (Vamos a rechazar fakebit, DJ Sessions, cubiertas, material robado, etc). Las canciones pueden tener un número ilimitado de instrumentación, dispositivos, voces o post-procesamiento, pero la música que suena debe mantener una alta tecnología de 8 bits.
				<br></br>
				Una vez que tengamos la demo, vamos a pasar algún tiempo analizándolo y vamos a tratar de volver a usted tan pronto como sea posible. Si todo es fresco, te pediremos la siguiente información para poder liberarlo, a través de nuestra página web bajo una licencia Creative Commons (BY-NC-ND 3.0) Licencia.
				</p>
				<div id="separador2"></div>
				<div id="muro"></div>
				<div id="personaje1"></div>
				<div id="personaje2"></div>
			</section>
			<!-- footer -->
			<footer>
			<article class="seccionesFooter">
				<h4> ZUTURA </h4>
				<h5> 8bit - Circuit Bending NET LABEL </h5>
			</article>
			<article class="seccionesFooter">
				<?php
				$consulta = $conexion -> query("SELECT*FROM usuarios WHERE nombre = '".$_SESSION['nombreUsuario']."' AND clave = '".$_SESSION['claveUsuario']."' ");
					if($registro = $consulta -> fetch_assoc())
					{
						echo "<h6>{$_SESSION['nombreUsuario']}</h6>";
						echo "<br>";
						echo "<img id='usuarioLogeado' src='".$registro['avatar']."'>";
					}
					else
					{
						die ('error');
					}
				?>
				<form action="contenido.php" method="post" id="selectorColor">
					<select name="color">
						<label for="nombre"> Escoja un color de fondo </label>
						<option value="red"> rojo </option>
						<option value="yellow"> Amarillo </option>
						<option value="green"> verde </option>
						<option value="white"> blanco </option>
						<option value="black"> negro </option>
						<option value="gray"> gris </option>
						<option value="coffe"> Cafe </option>
						<input type="submit" value="escojer color"> enviar
					</select>
				</form>
				<a id="chao" href="cerrarsesion.php"> cerrar sesion</a>
				<a id="medejas" href="eliminarCuenta.php"> Eliminar cuenta</a>
			</article>
			<article class="seccionesFooter">
				<ol>
					<li id="registrarse">
						<a href="administrarUsuarios/registrarse.php"> registrarse </a>
					</li>
					<li id="entrar">
						<a href="administrarUsuarios/entrar.php"> Entrar </a>
					</li>
				</ol>
			</article>
			</footer>
			<!-- fin footer-->

			<!-- contenido del form que se actualiza con la cookie-->
		</div>
	</body>
</html>
