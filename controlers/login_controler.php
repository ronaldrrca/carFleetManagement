<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Usuarios
require_once('../model/users.php');

//Se reciben los valores que provienen del formulario
$cedula=$_POST['cedula'];
$contrasena=$_POST['pass'];


//Se instancia la clase usuarios
$objUser=new Users;

//Se invoca la función para validar cédula y contraseña
$validate=$objUser->validateUser($cedula);

//Se recibe el resultado en un array
$result=$validate->fetch_assoc();

  //Consicional para redireccionar de acuerdo al resultado
  if ($result) {

        if (password_verify($contrasena, $result['usuarios_pass'])) {
              //Sí se inicia sesión, la variable $_SESION toma el valor de nit
              if ($result['usuarios_perfil']=="Admin") {
                  $_SESSION['Admin']=$result['usuarios_nombre'];
                  
              }else if($result['usuarios_perfil']=="Standard"){
                  $_SESSION['Standard']=$result['usuarios_nombre'];
                  
              }else {
                // code...
              }
              echo "<meta http-equiv='refresh' content='0;../view/html/home.php' />";

          }else {
            //Se muestra un alert de javascript, se espera que el usuario presione aceptar
                  echo '<script> alert ("Contraseña inválida. Presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../view/html/login.php' />";
          }


  }else {
    //Se muestra un alert de javascript, se espera que el usuario presione aceptar
    echo "<script type='text/javascript'>alert('Cédula inválida o no registrada');</script>";
    echo "<meta http-equiv='refresh' content='0;../view/html/login.php' />";
  }

  
  
 ?>