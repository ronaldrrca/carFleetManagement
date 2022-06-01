<?php
require '../model/vehicles.php';

$id = $_GET['id'];
$objVehicle = new Vehicles;
$delete = $objVehicle->deleteVehicle($id);

if ($delete) {
    echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
    echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
}else {
        echo '<script> alert ("Ocurrió un error"); </script>';
        echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
}