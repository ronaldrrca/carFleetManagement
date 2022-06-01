<?php
require_once '../model/vehicles.php';

$id = trim(htmlspecialchars($_POST['id']));
$marca = strtoupper(trim(htmlspecialchars($_POST['marca'])));
$tipo = strtoupper(trim(htmlspecialchars(strtoupper($_POST['tipo'])))) ;
$modelo = strtoupper(trim(htmlspecialchars($_POST['modelo'])));
$anio = trim(htmlspecialchars($_POST['anio']));
$color = strtoupper(trim(htmlspecialchars($_POST['color'])));
$placa = strtoupper(trim(htmlspecialchars($_POST['placa'])));
$serial_motor = strtoupper(trim(htmlspecialchars($_POST['serial_motor'])));

// echo "id: " . $id . ", marca: " . $marca . ", tipo: " . $tipo . ", modelo: " . $modelo . ", año: " . $anio . ", color: " . $color . ", placa: " . $placa . ", serial_motor: " . $serial_motor;


$objVehicles = new Vehicles;

$edit = $objVehicles->editVehicle($id, $marca, $tipo, $modelo, $anio, $color, $placa, $serial_motor);
// echo $edit; die();
if ($edit) {
    echo '<script> alert ("Operación exitosa, presione aceptar para continuar"); </script>';
                  echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
}else {
    echo '<script> alert ("Ocurrió un error"); </script>';
    echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
}