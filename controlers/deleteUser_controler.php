<?php
require_once '../model/users.php';

$id = $_GET['id'];
$objUsers = new Users;

$eliminar = $objUsers->deleteUser($id);
if ($eliminar) {
    echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
    echo "<meta http-equiv='refresh' content='0;../view/html/list_users.php' />";
}else {
        echo '<script> alert ("Ocurrió un error"); </script>';
        echo "<meta http-equiv='refresh' content='0;../view/html/list_users.php' />";
    }




