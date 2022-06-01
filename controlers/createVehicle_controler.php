<?php
require '../model/vehicles.php';

$marca = strtoupper(trim(htmlspecialchars($_POST['marca'])));
$tipo = strtoupper(trim(htmlspecialchars($_POST['tipo'])));
$modelo = strtoupper(trim(htmlspecialchars($_POST['modelo'])));
$anio = trim(htmlspecialchars($_POST['anio']));
$color = strtoupper(trim(htmlspecialchars($_POST['color'])));
$placa = strtoupper(trim(htmlspecialchars($_POST['placa'])));
$serial_motor = strtoupper(trim(htmlspecialchars($_POST['serial_motor'])));

$objVehicle = new Vehicles;
//Primero validamos que la placa y/o el serial del motor no se encuentren registrados 
$validateDuplicate = $objVehicle->consultDuplcates($placa, $serial_motor); 

if ($result = $validateDuplicate->fetch_object()) {
    echo '<script> alert ("La placa y/o el serial del motor ya están registrado en el sistema"); </script>';
    echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
}else {
    $create = $objVehicle->createVehicle($marca, $tipo, $modelo, $anio, $color, $placa, $serial_motor);

    if ($create) {
        echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
    }else{
        echo '<script> alert ("Ocurrió un error"); </script>';
        echo "<meta http-equiv='refresh' content='0;../view/html/registros.php' />";
    }
}


// echo "<pre>"; print_r($validateDuplicate); "</pre>"; die();