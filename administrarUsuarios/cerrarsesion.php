<?php
session_start();
unset($_SESSION['nombreUsuario']);
unset($_SESSION['claveUsuario']);
session_destroy();
header("Location:../index.php");
exit;
?>