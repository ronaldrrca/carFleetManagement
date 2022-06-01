<?php
require '../../model/vehicles.php';

$objVehicle = new Vehicles;

$list = $objVehicle->listVehicles();

