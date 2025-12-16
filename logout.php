<?php
session_start();
session_destroy();
header("Location: ../index.html");
?>
<a href="config/Controller.php?logout=true">Cerrar sesión</a>
