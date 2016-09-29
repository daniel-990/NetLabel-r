<?php
if($_POST['edo'])
{
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$comentario = $_POST['comentario'];

	if(empty($nombre))
	{
		echo "El nombre es obligatorio<br>";
	}
	else if(empty($correo))
	{
		echo "El apellido es obligatorio<br>";
	}
	else if(empty($comentario))
	{
		echo "El comentario es obligatorio<br>";
	}
	else
	{
		$mail = "johnnyalexandersepulveda@gmail.com";
		$mensaje = "$nombre ha enviado un mensaje.<br>";
		$mensaje .= "su correo es $correo y su mensaje es:<br>";
		$mensaje .= $comentario;

		$cabecera = "MIME-Version: 1.0\r\n";
		$cabecera .= "Content-type:text/html; charset=UTF-8\r\n";
		$cabecera .= "From: ".$_POST['correo']."\r\n";
		$cabecera .= "Repaly-to: $correo\r\n";

		$asunto = "$nombre ha enviado un email";

		if(mail($mail, $asunto, $mensaje, $cabecera))
			{
				echo "Su comentario ha sido enviado exitosamente<br>";
			#	echo "<script> window.location='index.php'</script>";
			} else
			{
				echo " Error en el envio de su correo, intentalo mas tarde<br>";
			#	echo "<script> window.location='index.php'</script>";

			}
	}

	# para capturar el name del argumento input en la foto
		if($_POST['guardar'])
		{
			$archivo = $_FILES["archivo"]['tmp_name'];
			$destino = "imagenes/".$FILES['archivo']['name'];
			move_upload_file($archivo, $destino);
		}
}
?>
