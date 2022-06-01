<?php
//Se requiere el archivo que contiene la clase Empleados
require_once('../model/users.php');


//Se reciben los valores que provienen del formulario
$cedula = trim(htmlspecialchars($_POST['cedula']));
$nombre = trim(htmlspecialchars(strtoupper($_POST['name'])));
$perfil = trim(htmlspecialchars(strtoupper($_POST['perfil']))) ;
$hash=password_hash($cedula, PASSWORD_BCRYPT);

// echo $hash;
// die();

//Se instancia la clase usuarios
$objUser=new Users;

//Se invoca la función crear usuario
$create=$objUser->createUser($cedula, $nombre, $perfil, $hash);

  //Consicional para redireccionar de acuerdo al resultado
  if ($create) {
    header('location:../view/html/list_users.php');
  }else {
    echo '<script> alert ("Ocurrió un error"); </script>';
         echo "<meta http-equiv='refresh' content='0;../view/html/nuevoUsuario.php' />";
  }

 ?>


