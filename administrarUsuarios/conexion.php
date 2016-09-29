<?php
$server = "localhost";
$user = "alex";
$pass = 12345;
$bd = "zutura";

$conexion = new mysqli($server,$user,$pass,$bd);

if($conexion -> connect_error)
{
	die ("ha fallado la conexion".$conexion->connect_error);
	echo "<script> window.location='../index.php'</script>";
}
else
{
	/*echo "se ha conectado";*/

}
?>