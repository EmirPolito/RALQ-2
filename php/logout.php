<?php
session_start(); // Inicia la sesión

session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión

header("Location: ../menu.php"); // Redirige al usuario al index.php
exit;
?>
