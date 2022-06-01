<?php

//Iniciar una nueva sesión o reanudar una existete
session_start();

if ($_SESSION) {
  //Sí existe una sesión carga el inicio.
  header('location: view/html/home.php');
}else {
  //Sí no existe sesión carga el login.
  header('location: view/html/login.php');
}


 ?>

