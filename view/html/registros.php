<?php
session_start();
if (!isset($_SESSION['Admin']) && !isset($_SESSION['Standard']) ) {
    header('Location: login.php');
} 
require '../../controlers/listVehicles_controler.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>REGISTROS</h1>
        <table id="userTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th class="noMobileComponent">Tipo</th>
                    <th class="noMobileComponent">Modelo</th>
                    <th>Año</th>
                    <th class="noMobileComponent">Color</th>
                    <th>Placa</th>
                    <th class="noMobileComponent">Serial motor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($resultado = $list->fetch_object()) { ?>
                    <tr>
                        <td><?php echo $resultado->vehiculos_id ?></td>
                        <td><?php echo $resultado->vehiculos_marca ?></td>
                        <td class="noMobileComponent"><?php echo $resultado->vehiculos_tipo ?></td>
                        <td class="noMobileComponent"><?php echo $resultado->vehiculos_modelo ?></td>
                        <td><?php echo $resultado->vehiculos_anio ?></td>
                        <td class="noMobileComponent"><?php echo $resultado->vehiculos_color ?></td>
                        <td><?php echo $resultado->vehiculos_placa ?></td>
                        <td class="noMobileComponent"><?php echo $resultado->vehiculos_serial_motor ?></td>
                        <td><img class="editImage" src="../../assets/icons/edit_icon.svg" alt="icono editar vehiculo" onclick="editarVehiculo('edit_vehicle.php', '<?php echo $resultado->vehiculos_id ?>' , 
                        '<?php echo $resultado->vehiculos_marca ?>' , '<?php echo $resultado->vehiculos_tipo ?>', '<?php echo $resultado->vehiculos_modelo ?>', '<?php echo $resultado->vehiculos_anio ?>',
                        '<?php echo $resultado->vehiculos_color ?>', '<?php echo $resultado->vehiculos_placa ?>', '<?php echo $resultado->vehiculos_serial_motor ?>')"></td>
                        <td><img class="deleteImage" src="../../assets/icons/delete_icon.svg" alt="icono eliminar vehiculo" onclick="eliminarVehiculo('../../controlers/deleteVehicle_controler.php', 
                        '<?php echo $resultado->vehiculos_id ?>', '<?php echo $resultado->vehiculos_placa ?>')"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="nuevoVehiculo.php"><button id="nuevoUsuario_button"><img id="icon_addUser" src="../../assets/icons/add_icon.svg" alt="icono de agregar">Registrar vehiculo</button></a>
    </main>
    <footer>

    </footer>    
    <script src="../js/header.js"></script>
    <script src="../js/registros.js"></script>
</body>
</html>