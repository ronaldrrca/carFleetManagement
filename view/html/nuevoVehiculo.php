<?php
session_start();
if (!isset($_SESSION['Admin']) && !isset($_SESSION['Standard']) ) {
    header('Location: login.php');
} ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo vehículo</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>REGISTRAR VEHÍCULO</h1>
        <form id="vehicle_form" action="../../controlers/createVehicle_controler.php" method="post">
            <div class="vehicle_form_itemContainer">
                <label for="marca">Marca</label>
                <input type="text" autofocus required name="marca">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="tipo">Tipo</label>
                <input type="text" required name="tipo">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="modelo">Modelo</label>
                <input type="text" required name="modelo">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="anio">Año</label>
                <input type="number" required name="anio">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="color">Color</label>
                <input type="text" required name="color">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="placa">Placa</label>
                <input type="text" required name="placa">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="serial_motor">Serial motor</label>
                <input type="text" required name="serial_motor">
            </div>
                       
            <input type="submit" value="Registrar">
        </form>
        <a id="cancel" href="<?=$_SERVER['HTTP_REFERER']?>">Cancelar</a>
    </main>
    <footer>

    </footer>
    <script src="../js/header.js"></script>
</body>
</html>