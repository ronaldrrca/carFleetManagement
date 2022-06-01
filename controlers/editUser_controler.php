<?php
require_once '../model/users.php';

$id = $_POST['id'];
$cedula = trim(htmlspecialchars($_POST['cedula']));
$nombre = trim(htmlspecialchars(strtoupper($_POST['nombre'])));
$perfil = trim(htmlspecialchars($_POST['perfil']));

// echo $id;
// echo $cedula;
// echo $nombre;
// echo $perfil;die();

$objUsers = new Users;

$edit = $objUsers->editUser($id, $cedula, $nombre, $perfil);
// echo $edit; die();
if ($edit) {
    echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../view/html/list_users.php' />";
}else {
    echo '<script> alert ("Ocurrió un error"); </script>';
    echo "<meta http-equiv='refresh' content='0;../view/html/list_users.php' />";
}