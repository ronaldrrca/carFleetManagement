<?php

// Iniciar una nueva sesión o reanudar la existente, en este punto es necesario para poder cerrar la sesión
session_start();

//Se destruye cualquiera de las sesiones existentes
unset($_SESSION['Admin']);
unset($_SESSION['Standard']);
//unset($_SESSION['estandar']);
session_destroy();

//Redirecciona al index
header('location: ../view/html/login.php');

 ?>