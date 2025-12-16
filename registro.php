<?php
include("../config/conexion.php");

$clave = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$conn->query("
INSERT INTO usuarios
(nombres, apellidos, tipo_documento, numero_documento, correo_electronico, contrasena, telefono)
VALUES
('$_POST[nombres]', '$_POST[apellidos]', '$_POST[tipo_documento]',
 '$_POST[numero_documento]', '$_POST[correo]', '$clave', '$_POST[telefono]')
");

header("Location: login.html");
?>
