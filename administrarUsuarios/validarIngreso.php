<?php
session_start();
include 'conexion.php';
error_reporting(0);

$nombre = $_POST['user'];
$password = $_POST['password'];

$consulta = $conexion -> query("SELECT*FROM usuarios WHERE nombre = '$nombre' && clave = '$password' ") or die("conexion fallo");

if($registro = $consulta -> fetch_assoc())
{
	//$nombre = $registro['nombre'];
	//$
	$_SESSION['nombreUsuario'] = $nombre;
	$_SESSION['claveUsuario'] = $password;
	echo "<script> window.location='contenido.php'</script>";
} 
else
{
	header('Location:../index.php');
}

?>