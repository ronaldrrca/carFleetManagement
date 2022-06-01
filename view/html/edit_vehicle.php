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
    <title>Editar vehículo</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>EDITAR VEHÍCULO</h1>
        <form id="vehicle_form" action="../../controlers/editVehicle_controler.php" method="post">
            <div class="vehicle_form_itemContainer">
                <label for="id">Id</label>
                <input type="text" required name="id" value="<?php echo $_GET['id'] ?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="marca">Marca</label>
                <input type="text" autofocus required name="marca" value="<?php echo $_GET['marca'] ?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="tipo">Tipo</label>
                <input type="text" required name="tipo" value="<?php echo $_GET['tipo'] ?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="modelo">Modelo</label>
                <input type="text" required name="modelo" value="<?php echo $_GET['modelo']?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="anio">Año</label>
                <input type="number" required name="anio" value="<?php echo $_GET['anio']?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="color">Color</label>
                <input type="text" required name="color" value="<?php echo $_GET['color']?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="placa">Placa</label>
                <input type="text" required name="placa" value="<?php echo $_GET['placa']?>">
            </div>
            <div class="vehicle_form_itemContainer">
                <label for="serial_motor">Serial motor</label>
                <input type="text" required name="serial_motor" value="<?php echo $_GET['serial_motor']?>">
            </div>
                       
            <input type="submit" value="Registrar cambios">
        </form>
        <a id="cancel" href="<?=$_SERVER['HTTP_REFERER']?>">Cancelar</a>
    </main>
    <footer>

    </footer>
    <script src="../js/header.js"></script>
</body>
</html>