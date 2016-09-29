<?php
	session_start();
	include 'conexion.php';
	
	$consulta = $conexion -> query("DELETE FROM usuarios WHERE nombre = '".$_SESSION['nombreUsuario']."' AND clave = '".$_SESSION['claveUsuario']."' ")
	or die("conexion fallo");
	echo "usuario eliminado";
?>